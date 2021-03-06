import { createTemplatesFilterFormula } from '../util/airtable'
import { Axios as api } from './axios'
import { CancelToken } from 'axios'
import { templates as config } from '../config'
import { useTemplatesStore as templateState } from '../state/Templates'

let count = 0

export const Templates = {
    async get(searchParams, offset) {
        count++

        // Cancel the previous request if another was make
        const fetchToken = CancelToken.source()
        if (templateState.getState().fetchToken?.cancel) {
            templateState.getState().fetchToken.cancel()
        }
        templateState.setState({
            fetchToken: fetchToken,
        })
        const templates = await api.post(
            'templates', {
                filterByFormula: createTemplatesFilterFormula(searchParams),
                pageSize: config.templatesPerRequest,
                categories: searchParams.categories,
                search: searchParams.search,
                type: searchParams.type,
                offset: offset,
                initial: count === 1,
                requestNumber: count,
            }, {
                cancelToken: fetchToken.token,
            },
        )
        templateState.setState({
            fetchToken: null,
        })
        return templates
    },
    import(template) {
        return api.post(`templates/${template.id}`, {
            template_id: template.id,
            pageSize: config.templatesPerRequest,
            template_name: template.fields?.title,
        })
    },
}
