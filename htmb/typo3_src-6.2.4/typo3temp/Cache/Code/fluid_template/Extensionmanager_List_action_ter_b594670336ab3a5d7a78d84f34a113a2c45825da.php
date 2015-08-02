<?php
class FluidCache_Extensionmanager_List_action_ter_b594670336ab3a5d7a78d84f34a113a2c45825da extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section docheader-buttons
 */
public function section_82416aa889dc891ac3382685ebae30417e96849a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments2 = array();
$arguments2['action'] = 'form';
$arguments2['controller'] = 'UploadExtensionFile';
$arguments2['arguments'] = array (
);
$arguments2['extensionName'] = NULL;
$arguments2['pluginName'] = NULL;
$arguments2['pageUid'] = NULL;
$arguments2['pageType'] = 0;
$arguments2['noCache'] = false;
$arguments2['noCacheHash'] = false;
$arguments2['section'] = '';
$arguments2['format'] = '';
$arguments2['linkAccessRestrictedPages'] = false;
$arguments2['additionalParams'] = array (
);
$arguments2['absolute'] = false;
$arguments2['addQueryString'] = false;
$arguments2['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments2['addQueryStringMethod'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1['uri'] = $viewHelper4->initializeArgumentsAndRender();
$arguments1['icon'] = 'actions-edit-upload';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'extensionList.uploadExtension';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1['title'] = $viewHelper7->initializeArgumentsAndRender();
$arguments1['additionalAttributes'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper9->setArguments($arguments1);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * section module-headline
 */
public function section_448d1ad99edd62d80682fc5d4e038788bb925e4c(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output10 = '';

$output10 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'getExtensions';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return 'Get Extensions';
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output10 .= $viewHelper13->initializeArgumentsAndRender();

$output10 .= '</h1>
';

return $output10;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'List/UploadForm';
$arguments15['section'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '

	<div class="headerRow ui-helper-clearfix">
		<div class="typo3-extensionmanager-headerRowLeft">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments18 = array();
$arguments18['class'] = 'typo3-extensionmanager-searchTerForm';
$arguments18['action'] = 'ter';
$arguments18['additionalAttributes'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['controller'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['object'] = NULL;
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['additionalParams'] = array (
);
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['fieldNamePrefix'] = NULL;
$arguments18['actionUri'] = NULL;
$arguments18['objectName'] = NULL;
$arguments18['hiddenFieldClassName'] = NULL;
$arguments18['enctype'] = NULL;
$arguments18['method'] = NULL;
$arguments18['name'] = NULL;
$arguments18['onreset'] = NULL;
$arguments18['onsubmit'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments21 = array();
$arguments21['name'] = 'search';
$arguments21['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext);
$arguments21['additionalAttributes'] = NULL;
$arguments21['required'] = NULL;
$arguments21['type'] = 'text';
$arguments21['property'] = NULL;
$arguments21['autofocus'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['maxlength'] = NULL;
$arguments21['readonly'] = NULL;
$arguments21['size'] = NULL;
$arguments21['placeholder'] = NULL;
$arguments21['errorClass'] = 'f3-form-error';
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output20 .= $viewHelper23->initializeArgumentsAndRender();

$output20 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments24 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments25 = array();
$arguments25['key'] = 'searchTemplate.submitButton';
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24['value'] = $viewHelper27->initializeArgumentsAndRender();
$arguments24['additionalAttributes'] = NULL;
$arguments24['name'] = NULL;
$arguments24['property'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper29->setArguments($arguments24);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output20 .= $viewHelper29->initializeArgumentsAndRender();

$output20 .= '
			';
return $output20;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper30->setArguments($arguments18);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output14 .= $viewHelper30->initializeArgumentsAndRender();

$output14 .= '
		</div>
		<div class="typo3-extensionmanager-headerRowRight">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments31 = array();
$arguments31['partial'] = 'List/UpdateFromTer';
$arguments31['section'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output14 .= $viewHelper33->initializeArgumentsAndRender();

$output14 .= '
		</div>
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments34 = array();
// Rendering Boolean node
$arguments34['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext));
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments37 = array();
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
			<table id="terSearchTable" class="t3-table typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['partial'] = 'List/TerTable';
// Rendering Array
$array41 = array();
$array41['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array41['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments40['arguments'] = $array41;
$arguments40['section'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper43->setArguments($arguments40);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output39 .= $viewHelper43->initializeArgumentsAndRender();

$output39 .= '
			</table>
		';
return $output39;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper44->setArguments($arguments37);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output36 .= $viewHelper44->initializeArgumentsAndRender();

$output36 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments45 = array();
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments48 = array();
$arguments48['partial'] = 'List/TerPaginator';
// Rendering Array
$array49 = array();
$array49['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array49['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array49['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments48['arguments'] = $array49;
$arguments48['section'] = NULL;
$arguments48['optional'] = false;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper51->setArguments($arguments48);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output47 .= $viewHelper51->initializeArgumentsAndRender();

$output47 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments52 = array();
$arguments52['key'] = 'extensionList.updateFromTer.label';
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output47 .= $viewHelper54->initializeArgumentsAndRender();

$output47 .= '</div></div>
			</div>
		';
return $output47;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper55->setArguments($arguments45);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output36 .= $viewHelper55->initializeArgumentsAndRender();

$output36 .= '
	';
return $output36;
};
$arguments34['__thenClosure'] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
			<table id="terSearchTable" class="t3-table typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments57 = array();
$arguments57['partial'] = 'List/TerTable';
// Rendering Array
$array58 = array();
$array58['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array58['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments57['arguments'] = $array58;
$arguments57['section'] = NULL;
$arguments57['optional'] = false;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper60->setArguments($arguments57);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output56 .= $viewHelper60->initializeArgumentsAndRender();

$output56 .= '
			</table>
		';
return $output56;
};
$arguments34['__elseClosure'] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments62 = array();
$arguments62['partial'] = 'List/TerPaginator';
// Rendering Array
$array63 = array();
$array63['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array63['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array63['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments62['arguments'] = $array63;
$arguments62['section'] = NULL;
$arguments62['optional'] = false;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper65->setArguments($arguments62);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output61 .= $viewHelper65->initializeArgumentsAndRender();

$output61 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'extensionList.updateFromTer.label';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper68->setArguments($arguments66);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output61 .= $viewHelper68->initializeArgumentsAndRender();

$output61 .= '</div></div>
			</div>
		';
return $output61;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper69->setArguments($arguments34);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output14 .= $viewHelper69->initializeArgumentsAndRender();

$output14 .= '

';

return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output70 = '';

$output70 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments71 = array();
$arguments71['name'] = 'main';
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper73->setArguments($arguments71);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output70 .= $viewHelper73->initializeArgumentsAndRender();

$output70 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments74 = array();
$arguments74['name'] = 'docheader-buttons';
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments77 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments78 = array();
$arguments78['action'] = 'form';
$arguments78['controller'] = 'UploadExtensionFile';
$arguments78['arguments'] = array (
);
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = 0;
$arguments78['noCache'] = false;
$arguments78['noCacheHash'] = false;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments77['uri'] = $viewHelper80->initializeArgumentsAndRender();
$arguments77['icon'] = 'actions-edit-upload';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments81 = array();
$arguments81['key'] = 'extensionList.uploadExtension';
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['htmlEscape'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper83->setArguments($arguments81);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments77['title'] = $viewHelper83->initializeArgumentsAndRender();
$arguments77['additionalAttributes'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper85->setArguments($arguments77);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output76 .= $viewHelper85->initializeArgumentsAndRender();

$output76 .= '
';
return $output76;
};

$output70 .= '';

$output70 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments86 = array();
$arguments86['name'] = 'module-headline';
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments89 = array();
$arguments89['key'] = 'getExtensions';
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['htmlEscape'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return 'Get Extensions';
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '</h1>
';
return $output88;
};

$output70 .= '';

$output70 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments92 = array();
$arguments92['name'] = 'Content';
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments95 = array();
$arguments95['partial'] = 'List/UploadForm';
$arguments95['section'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output94 .= $viewHelper97->initializeArgumentsAndRender();

$output94 .= '

	<div class="headerRow ui-helper-clearfix">
		<div class="typo3-extensionmanager-headerRowLeft">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments98 = array();
$arguments98['class'] = 'typo3-extensionmanager-searchTerForm';
$arguments98['action'] = 'ter';
$arguments98['additionalAttributes'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['controller'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['pluginName'] = NULL;
$arguments98['pageUid'] = NULL;
$arguments98['object'] = NULL;
$arguments98['pageType'] = 0;
$arguments98['noCache'] = false;
$arguments98['noCacheHash'] = false;
$arguments98['section'] = '';
$arguments98['format'] = '';
$arguments98['additionalParams'] = array (
);
$arguments98['absolute'] = false;
$arguments98['addQueryString'] = false;
$arguments98['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments98['fieldNamePrefix'] = NULL;
$arguments98['actionUri'] = NULL;
$arguments98['objectName'] = NULL;
$arguments98['hiddenFieldClassName'] = NULL;
$arguments98['enctype'] = NULL;
$arguments98['method'] = NULL;
$arguments98['name'] = NULL;
$arguments98['onreset'] = NULL;
$arguments98['onsubmit'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments101 = array();
$arguments101['name'] = 'search';
$arguments101['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext);
$arguments101['additionalAttributes'] = NULL;
$arguments101['required'] = NULL;
$arguments101['type'] = 'text';
$arguments101['property'] = NULL;
$arguments101['autofocus'] = NULL;
$arguments101['disabled'] = NULL;
$arguments101['maxlength'] = NULL;
$arguments101['readonly'] = NULL;
$arguments101['size'] = NULL;
$arguments101['placeholder'] = NULL;
$arguments101['errorClass'] = 'f3-form-error';
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output100 .= $viewHelper103->initializeArgumentsAndRender();

$output100 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments104 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments105 = array();
$arguments105['key'] = 'searchTemplate.submitButton';
$arguments105['id'] = NULL;
$arguments105['default'] = NULL;
$arguments105['htmlEscape'] = NULL;
$arguments105['arguments'] = NULL;
$arguments105['extensionName'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104['value'] = $viewHelper107->initializeArgumentsAndRender();
$arguments104['additionalAttributes'] = NULL;
$arguments104['name'] = NULL;
$arguments104['property'] = NULL;
$arguments104['disabled'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper109->setArguments($arguments104);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure108);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output100 .= $viewHelper109->initializeArgumentsAndRender();

$output100 .= '
			';
return $output100;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper110->setArguments($arguments98);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output94 .= $viewHelper110->initializeArgumentsAndRender();

$output94 .= '
		</div>
		<div class="typo3-extensionmanager-headerRowRight">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments111 = array();
$arguments111['partial'] = 'List/UpdateFromTer';
$arguments111['section'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output94 .= $viewHelper113->initializeArgumentsAndRender();

$output94 .= '
		</div>
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext));
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments117 = array();
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
			<table id="terSearchTable" class="t3-table typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments120 = array();
$arguments120['partial'] = 'List/TerTable';
// Rendering Array
$array121 = array();
$array121['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array121['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments120['arguments'] = $array121;
$arguments120['section'] = NULL;
$arguments120['optional'] = false;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper123->setArguments($arguments120);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output119 .= $viewHelper123->initializeArgumentsAndRender();

$output119 .= '
			</table>
		';
return $output119;
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper124->setArguments($arguments117);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output116 .= $viewHelper124->initializeArgumentsAndRender();

$output116 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments125 = array();
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments128 = array();
$arguments128['partial'] = 'List/TerPaginator';
// Rendering Array
$array129 = array();
$array129['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array129['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array129['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments128['arguments'] = $array129;
$arguments128['section'] = NULL;
$arguments128['optional'] = false;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper131->setArguments($arguments128);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output127 .= $viewHelper131->initializeArgumentsAndRender();

$output127 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments132 = array();
$arguments132['key'] = 'extensionList.updateFromTer.label';
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['htmlEscape'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output127 .= $viewHelper134->initializeArgumentsAndRender();

$output127 .= '</div></div>
			</div>
		';
return $output127;
};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper135->setArguments($arguments125);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output116 .= $viewHelper135->initializeArgumentsAndRender();

$output116 .= '
	';
return $output116;
};
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
			<table id="terSearchTable" class="t3-table typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments137 = array();
$arguments137['partial'] = 'List/TerTable';
// Rendering Array
$array138 = array();
$array138['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array138['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments137['arguments'] = $array138;
$arguments137['section'] = NULL;
$arguments137['optional'] = false;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper140->setArguments($arguments137);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output136 .= $viewHelper140->initializeArgumentsAndRender();

$output136 .= '
			</table>
		';
return $output136;
};
$arguments114['__elseClosure'] = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments142 = array();
$arguments142['partial'] = 'List/TerPaginator';
// Rendering Array
$array143 = array();
$array143['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array143['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array143['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments142['arguments'] = $array143;
$arguments142['section'] = NULL;
$arguments142['optional'] = false;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper145->setArguments($arguments142);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output141 .= $viewHelper145->initializeArgumentsAndRender();

$output141 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = 'extensionList.updateFromTer.label';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper148->setArguments($arguments146);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output141 .= $viewHelper148->initializeArgumentsAndRender();

$output141 .= '</div></div>
			</div>
		';
return $output141;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper149->setArguments($arguments114);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output94 .= $viewHelper149->initializeArgumentsAndRender();

$output94 .= '

';
return $output94;
};

$output70 .= '';

return $output70;
}


}
#1438519315    44263     