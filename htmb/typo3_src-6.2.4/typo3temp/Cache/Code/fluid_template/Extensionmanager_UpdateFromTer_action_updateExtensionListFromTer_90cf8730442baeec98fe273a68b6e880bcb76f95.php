<?php
class FluidCache_Extensionmanager_UpdateFromTer_action_updateExtensionListFromTer_90cf8730442baeec98fe273a68b6e880bcb76f95 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper
$arguments1 = array();
// Rendering Array
$array2 = array();
$array2['updated'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'updated', $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments3 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'extensionList.updateFromTer.lastUpdate.fullTimeFormat';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3['format'] = $viewHelper6->initializeArgumentsAndRender();
$arguments3['date'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'repository.lastUpdate', $renderingContext);
};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper8->setArguments($arguments3);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$array2['lastUpdateTime'] = $viewHelper8->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\TimeSinceLastUpdateViewHelper
$arguments9 = array();
$arguments9['lastUpdateTime'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'repository.lastUpdate', $renderingContext);
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\TimeSinceLastUpdateViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\TimeSinceLastUpdateViewHelper
$array2['timeSinceLastUpdate'] = $viewHelper11->initializeArgumentsAndRender();
$array2['errorMessage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'errorMessage', $renderingContext);
$arguments1['additionalAttributes'] = $array2;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper');
$viewHelper13->setArguments($arguments1);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper

$output0 .= $viewHelper13->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}


}
#1438519318    4361      