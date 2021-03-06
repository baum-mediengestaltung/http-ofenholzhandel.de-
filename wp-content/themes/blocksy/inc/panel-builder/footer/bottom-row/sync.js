import { handleRowVariables, handleRowOptions } from '../middle-row/sync'
import ctEvents from 'ct-events'

ctEvents.on(
	'ct:footer:sync:collect-variable-descriptors',
	(variableDescriptors) => {
		variableDescriptors['bottom-row'] = handleRowVariables
	}
)

ctEvents.on('ct:footer:sync:item:bottom-row', (changeDescriptor) =>
	handleRowOptions({
		selector: '.ct-footer [data-row="bottom"]',
		changeDescriptor,
	})
)
