<?php
class FluidCache_Fluid_ViewHelpers_Be_Widget_Paginate_action_index_a40bccf245c24e93b6779b22931c5d9ecd11f628 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div id="typo3-dblist-pagination">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasLessPages', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments7 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments8 = array();
// Rendering Array
$array9 = array();
$array9['currentPage'] = 1;
$arguments8['arguments'] = $array9;
$arguments8['action'] = NULL;
$arguments8['section'] = '';
$arguments8['format'] = '';
$arguments8['ajax'] = false;
$arguments8['addQueryStringMethod'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper11->setArguments($arguments8);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments7['uri'] = $viewHelper11->initializeArgumentsAndRender();
$arguments7['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'widget.pagination.first';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7['title'] = $viewHelper14->initializeArgumentsAndRender();
$arguments7['additionalAttributes'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper16->setArguments($arguments7);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output6 .= $viewHelper16->initializeArgumentsAndRender();

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments17 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments18 = array();
// Rendering Array
$array19 = array();
$array19['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments18['arguments'] = $array19;
$arguments18['action'] = NULL;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['ajax'] = false;
$arguments18['addQueryStringMethod'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper21->setArguments($arguments18);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments17['uri'] = $viewHelper21->initializeArgumentsAndRender();
$arguments17['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'widget.pagination.previous';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17['title'] = $viewHelper24->initializeArgumentsAndRender();
$arguments17['additionalAttributes'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper26->setArguments($arguments17);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output6 .= $viewHelper26->initializeArgumentsAndRender();

$output6 .= '
			';
return $output6;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper27->setArguments($arguments4);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output3 .= $viewHelper27->initializeArgumentsAndRender();

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments28 = array();
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments31 = array();
$arguments31['uri'] = '';
$arguments31['icon'] = 'actions-view-paging-first-disabled';
$arguments31['title'] = '';
$arguments31['additionalAttributes'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments34 = array();
$arguments34['uri'] = '';
$arguments34['icon'] = 'actions-view-paging-previous-disabled';
$arguments34['title'] = '';
$arguments34['additionalAttributes'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output30 .= $viewHelper36->initializeArgumentsAndRender();

$output30 .= '
			';
return $output30;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper37->setArguments($arguments28);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output3 .= $viewHelper37->initializeArgumentsAndRender();

$output3 .= '
		';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments39 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments40 = array();
// Rendering Array
$array41 = array();
$array41['currentPage'] = 1;
$arguments40['arguments'] = $array41;
$arguments40['action'] = NULL;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['ajax'] = false;
$arguments40['addQueryStringMethod'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper43->setArguments($arguments40);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments39['uri'] = $viewHelper43->initializeArgumentsAndRender();
$arguments39['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'widget.pagination.first';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39['title'] = $viewHelper46->initializeArgumentsAndRender();
$arguments39['additionalAttributes'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper48->setArguments($arguments39);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output38 .= $viewHelper48->initializeArgumentsAndRender();

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments49 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments50 = array();
// Rendering Array
$array51 = array();
$array51['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments50['arguments'] = $array51;
$arguments50['action'] = NULL;
$arguments50['section'] = '';
$arguments50['format'] = '';
$arguments50['ajax'] = false;
$arguments50['addQueryStringMethod'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper53->setArguments($arguments50);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments49['uri'] = $viewHelper53->initializeArgumentsAndRender();
$arguments49['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'widget.pagination.previous';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49['title'] = $viewHelper56->initializeArgumentsAndRender();
$arguments49['additionalAttributes'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper58->setArguments($arguments49);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output38 .= $viewHelper58->initializeArgumentsAndRender();

$output38 .= '
			';
return $output38;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments60 = array();
$arguments60['uri'] = '';
$arguments60['icon'] = 'actions-view-paging-first-disabled';
$arguments60['title'] = '';
$arguments60['additionalAttributes'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output59 .= $viewHelper62->initializeArgumentsAndRender();

$output59 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments63 = array();
$arguments63['uri'] = '';
$arguments63['icon'] = 'actions-view-paging-previous-disabled';
$arguments63['title'] = '';
$arguments63['additionalAttributes'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output59 .= $viewHelper65->initializeArgumentsAndRender();

$output59 .= '
			';
return $output59;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper66->setArguments($arguments1);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper66->initializeArgumentsAndRender();

$output0 .= '
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext));
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments70 = array();
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output72 .= '
				';
return $output72;
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper76->setArguments($arguments70);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output69 .= $viewHelper76->initializeArgumentsAndRender();

$output69 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments77 = array();
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'widget.pagination.records';
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output79 .= $viewHelper82->initializeArgumentsAndRender();

$output79 .= '
				';
return $output79;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper83->setArguments($arguments77);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output69 .= $viewHelper83->initializeArgumentsAndRender();

$output69 .= '
			';
return $output69;
};
$arguments67['__thenClosure'] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output84 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));

$output84 .= '
				';
return $output84;
};
$arguments67['__elseClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments89 = array();
$arguments89['key'] = 'widget.pagination.records';
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['htmlEscape'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '
				';
return $output88;
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper92->setArguments($arguments67);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper92->initializeArgumentsAndRender();

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.startRecord', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output0 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output0 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.endRecord', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output0 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output0 .= '</span>
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments99 = array();
$arguments99['key'] = 'widget.pagination.page';
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output0 .= $viewHelper101->initializeArgumentsAndRender();

$output0 .= '
			<span>
				<form id="paginator-form-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());

$output0 .= (!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode']));

$output0 .= '" onsubmit="goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output0 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output0 .= '(this); return false;" style="display:inline;">
				<script type="text/javascript">
					function goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output0 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output0 .= '(formObject) {
						var url = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments111 = array();
// Rendering Array
$array112 = array();
$array112['currentPage'] = 987654321;
$arguments111['arguments'] = $array112;
$arguments111['action'] = NULL;
$arguments111['section'] = '';
$arguments111['format'] = '';
$arguments111['ajax'] = false;
$arguments111['addQueryStringMethod'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper114->setArguments($arguments111);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output0 .= $viewHelper114->initializeArgumentsAndRender();

$output0 .= '\';
						var page = formObject.elements[\'paginator-target-page\'].value;
						if (page > ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output0 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));

$output0 .= ') {
							page = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = NULL;
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());

$output0 .= (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments118['encoding'] !== NULL ? $arguments118['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments118['doubleEncode']));

$output0 .= ';
						} else if (page < 1) {
							page = 1;
						}
						url = url.replace(\'987654321\', page);
						self.location.href= url;
					}
				</script>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments121 = array();
$output122 = '';

$output122 .= 'paginator-';

$output122 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments121['id'] = $output122;
$arguments121['name'] = 'paginator-target-page';
$arguments121['size'] = '5';
$arguments121['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments121['additionalAttributes'] = NULL;
$arguments121['required'] = NULL;
$arguments121['type'] = 'text';
$arguments121['property'] = NULL;
$arguments121['autofocus'] = NULL;
$arguments121['disabled'] = NULL;
$arguments121['maxlength'] = NULL;
$arguments121['readonly'] = NULL;
$arguments121['placeholder'] = NULL;
$arguments121['errorClass'] = 'f3-form-error';
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper124->setArguments($arguments121);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper124->initializeArgumentsAndRender();

$output0 .= '
				</form>
			</span>
			/ ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());

$output0 .= (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));

$output0 .= '
		</span>
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments128 = array();
// Rendering Boolean node
$arguments128['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasMorePages', $renderingContext));
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments131 = array();
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments134 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments135 = array();
// Rendering Array
$array136 = array();
$array136['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments135['arguments'] = $array136;
$arguments135['action'] = NULL;
$arguments135['section'] = '';
$arguments135['format'] = '';
$arguments135['ajax'] = false;
$arguments135['addQueryStringMethod'] = NULL;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper138->setArguments($arguments135);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments134['uri'] = $viewHelper138->initializeArgumentsAndRender();
$arguments134['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments139 = array();
$arguments139['key'] = 'widget.pagination.next';
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments134['title'] = $viewHelper141->initializeArgumentsAndRender();
$arguments134['additionalAttributes'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper143->setArguments($arguments134);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output133 .= $viewHelper143->initializeArgumentsAndRender();

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments144 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments145 = array();
// Rendering Array
$array146 = array();
$array146['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments145['arguments'] = $array146;
$arguments145['action'] = NULL;
$arguments145['section'] = '';
$arguments145['format'] = '';
$arguments145['ajax'] = false;
$arguments145['addQueryStringMethod'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper148->setArguments($arguments145);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments144['uri'] = $viewHelper148->initializeArgumentsAndRender();
$arguments144['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments149 = array();
$arguments149['key'] = 'widget.pagination.last';
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper151->setArguments($arguments149);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments144['title'] = $viewHelper151->initializeArgumentsAndRender();
$arguments144['additionalAttributes'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper153->setArguments($arguments144);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output133 .= $viewHelper153->initializeArgumentsAndRender();

$output133 .= '
			';
return $output133;
};
$viewHelper154 = $self->getViewHelper('$viewHelper154', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper154->setArguments($arguments131);
$viewHelper154->setRenderingContext($renderingContext);
$viewHelper154->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output130 .= $viewHelper154->initializeArgumentsAndRender();

$output130 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments155 = array();
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments158 = array();
$arguments158['uri'] = '';
$arguments158['icon'] = 'actions-view-paging-next-disabled';
$arguments158['title'] = '';
$arguments158['additionalAttributes'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper160->setArguments($arguments158);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure159);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output157 .= $viewHelper160->initializeArgumentsAndRender();

$output157 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments161 = array();
$arguments161['uri'] = '';
$arguments161['icon'] = 'actions-view-paging-last-disabled';
$arguments161['title'] = '';
$arguments161['additionalAttributes'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper163->setArguments($arguments161);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output157 .= $viewHelper163->initializeArgumentsAndRender();

$output157 .= '
			';
return $output157;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper164->setArguments($arguments155);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output130 .= $viewHelper164->initializeArgumentsAndRender();

$output130 .= '
		';
return $output130;
};
$arguments128['__thenClosure'] = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments166 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments167 = array();
// Rendering Array
$array168 = array();
$array168['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments167['arguments'] = $array168;
$arguments167['action'] = NULL;
$arguments167['section'] = '';
$arguments167['format'] = '';
$arguments167['ajax'] = false;
$arguments167['addQueryStringMethod'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper170->setArguments($arguments167);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments166['uri'] = $viewHelper170->initializeArgumentsAndRender();
$arguments166['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments171 = array();
$arguments171['key'] = 'widget.pagination.next';
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper173 = $self->getViewHelper('$viewHelper173', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper173->setArguments($arguments171);
$viewHelper173->setRenderingContext($renderingContext);
$viewHelper173->setRenderChildrenClosure($renderChildrenClosure172);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments166['title'] = $viewHelper173->initializeArgumentsAndRender();
$arguments166['additionalAttributes'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper175->setArguments($arguments166);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output165 .= $viewHelper175->initializeArgumentsAndRender();

$output165 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments176 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments177 = array();
// Rendering Array
$array178 = array();
$array178['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments177['arguments'] = $array178;
$arguments177['action'] = NULL;
$arguments177['section'] = '';
$arguments177['format'] = '';
$arguments177['ajax'] = false;
$arguments177['addQueryStringMethod'] = NULL;
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper180->setArguments($arguments177);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure179);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments176['uri'] = $viewHelper180->initializeArgumentsAndRender();
$arguments176['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments181 = array();
$arguments181['key'] = 'widget.pagination.last';
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['htmlEscape'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper183->setArguments($arguments181);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments176['title'] = $viewHelper183->initializeArgumentsAndRender();
$arguments176['additionalAttributes'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper185 = $self->getViewHelper('$viewHelper185', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper185->setArguments($arguments176);
$viewHelper185->setRenderingContext($renderingContext);
$viewHelper185->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output165 .= $viewHelper185->initializeArgumentsAndRender();

$output165 .= '
			';
return $output165;
};
$arguments128['__elseClosure'] = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments187 = array();
$arguments187['uri'] = '';
$arguments187['icon'] = 'actions-view-paging-next-disabled';
$arguments187['title'] = '';
$arguments187['additionalAttributes'] = NULL;
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper189->setArguments($arguments187);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output186 .= $viewHelper189->initializeArgumentsAndRender();

$output186 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments190 = array();
$arguments190['uri'] = '';
$arguments190['icon'] = 'actions-view-paging-last-disabled';
$arguments190['title'] = '';
$arguments190['additionalAttributes'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper192->setArguments($arguments190);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output186 .= $viewHelper192->initializeArgumentsAndRender();

$output186 .= '
			';
return $output186;
};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper193->setArguments($arguments128);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper193->initializeArgumentsAndRender();

$output0 .= '
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments194 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments195 = array();
// Rendering Array
$array196 = array();
$array196['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments195['arguments'] = $array196;
$arguments195['action'] = NULL;
$arguments195['section'] = '';
$arguments195['format'] = '';
$arguments195['ajax'] = false;
$arguments195['addQueryStringMethod'] = NULL;
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper198->setArguments($arguments195);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments194['uri'] = $viewHelper198->initializeArgumentsAndRender();
$arguments194['icon'] = 'actions-system-refresh';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments199 = array();
$arguments199['key'] = 'widget.pagination.refresh';
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['htmlEscape'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper201->setArguments($arguments199);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure200);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments194['title'] = $viewHelper201->initializeArgumentsAndRender();
$arguments194['additionalAttributes'] = NULL;
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper203 = $self->getViewHelper('$viewHelper203', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper203->setArguments($arguments194);
$viewHelper203->setRenderingContext($renderingContext);
$viewHelper203->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper203->initializeArgumentsAndRender();

$output0 .= '
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output204 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments205 = array();
// Rendering Boolean node
$arguments205['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.insertAbove', $renderingContext));
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments208 = array();
$arguments208['section'] = 'paginator';
// Rendering Array
$array209 = array();
$array209['pagination'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination', $renderingContext);
$array209['position'] = 'top';
$array209['recordsLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.recordsLabel', $renderingContext);
$arguments208['arguments'] = $array209;
$arguments208['partial'] = NULL;
$arguments208['optional'] = false;
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper211->setArguments($arguments208);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output207 .= $viewHelper211->initializeArgumentsAndRender();

$output207 .= '
';
return $output207;
};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper212->setArguments($arguments205);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure206);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output204 .= $viewHelper212->initializeArgumentsAndRender();

$output204 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$arguments213 = array();
$arguments213['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'contentArguments', $renderingContext);
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper215 = $self->getViewHelper('$viewHelper215', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper');
$viewHelper215->setArguments($arguments213);
$viewHelper215->setRenderingContext($renderingContext);
$viewHelper215->setRenderChildrenClosure($renderChildrenClosure214);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper

$output204 .= $viewHelper215->initializeArgumentsAndRender();

$output204 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments216 = array();
// Rendering Boolean node
$arguments216['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.insertBelow', $renderingContext));
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments219 = array();
$arguments219['section'] = 'paginator';
// Rendering Array
$array220 = array();
$array220['pagination'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination', $renderingContext);
$array220['position'] = 'bottom';
$array220['recordsLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.recordsLabel', $renderingContext);
$arguments219['arguments'] = $array220;
$arguments219['partial'] = NULL;
$arguments219['optional'] = false;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper222->setArguments($arguments219);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure221);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output218 .= $viewHelper222->initializeArgumentsAndRender();

$output218 .= '
';
return $output218;
};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper223->setArguments($arguments216);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure217);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output204 .= $viewHelper223->initializeArgumentsAndRender();

$output204 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments224 = array();
$arguments224['name'] = 'paginator';
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
	<div id="typo3-dblist-pagination">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments227 = array();
// Rendering Boolean node
$arguments227['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasLessPages', $renderingContext));
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments230 = array();
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments233 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments234 = array();
// Rendering Array
$array235 = array();
$array235['currentPage'] = 1;
$arguments234['arguments'] = $array235;
$arguments234['action'] = NULL;
$arguments234['section'] = '';
$arguments234['format'] = '';
$arguments234['ajax'] = false;
$arguments234['addQueryStringMethod'] = NULL;
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper237 = $self->getViewHelper('$viewHelper237', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper237->setArguments($arguments234);
$viewHelper237->setRenderingContext($renderingContext);
$viewHelper237->setRenderChildrenClosure($renderChildrenClosure236);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments233['uri'] = $viewHelper237->initializeArgumentsAndRender();
$arguments233['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments238 = array();
$arguments238['key'] = 'widget.pagination.first';
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper240 = $self->getViewHelper('$viewHelper240', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper240->setArguments($arguments238);
$viewHelper240->setRenderingContext($renderingContext);
$viewHelper240->setRenderChildrenClosure($renderChildrenClosure239);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments233['title'] = $viewHelper240->initializeArgumentsAndRender();
$arguments233['additionalAttributes'] = NULL;
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper242 = $self->getViewHelper('$viewHelper242', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper242->setArguments($arguments233);
$viewHelper242->setRenderingContext($renderingContext);
$viewHelper242->setRenderChildrenClosure($renderChildrenClosure241);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output232 .= $viewHelper242->initializeArgumentsAndRender();

$output232 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments243 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments244 = array();
// Rendering Array
$array245 = array();
$array245['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments244['arguments'] = $array245;
$arguments244['action'] = NULL;
$arguments244['section'] = '';
$arguments244['format'] = '';
$arguments244['ajax'] = false;
$arguments244['addQueryStringMethod'] = NULL;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper247 = $self->getViewHelper('$viewHelper247', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper247->setArguments($arguments244);
$viewHelper247->setRenderingContext($renderingContext);
$viewHelper247->setRenderChildrenClosure($renderChildrenClosure246);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments243['uri'] = $viewHelper247->initializeArgumentsAndRender();
$arguments243['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments248 = array();
$arguments248['key'] = 'widget.pagination.previous';
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper250 = $self->getViewHelper('$viewHelper250', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper250->setArguments($arguments248);
$viewHelper250->setRenderingContext($renderingContext);
$viewHelper250->setRenderChildrenClosure($renderChildrenClosure249);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments243['title'] = $viewHelper250->initializeArgumentsAndRender();
$arguments243['additionalAttributes'] = NULL;
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper252 = $self->getViewHelper('$viewHelper252', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper252->setArguments($arguments243);
$viewHelper252->setRenderingContext($renderingContext);
$viewHelper252->setRenderChildrenClosure($renderChildrenClosure251);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output232 .= $viewHelper252->initializeArgumentsAndRender();

$output232 .= '
			';
return $output232;
};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper253->setArguments($arguments230);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure231);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output229 .= $viewHelper253->initializeArgumentsAndRender();

$output229 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments254 = array();
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments257 = array();
$arguments257['uri'] = '';
$arguments257['icon'] = 'actions-view-paging-first-disabled';
$arguments257['title'] = '';
$arguments257['additionalAttributes'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper259->setArguments($arguments257);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output256 .= $viewHelper259->initializeArgumentsAndRender();

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments260 = array();
$arguments260['uri'] = '';
$arguments260['icon'] = 'actions-view-paging-previous-disabled';
$arguments260['title'] = '';
$arguments260['additionalAttributes'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper262 = $self->getViewHelper('$viewHelper262', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper262->setArguments($arguments260);
$viewHelper262->setRenderingContext($renderingContext);
$viewHelper262->setRenderChildrenClosure($renderChildrenClosure261);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output256 .= $viewHelper262->initializeArgumentsAndRender();

$output256 .= '
			';
return $output256;
};
$viewHelper263 = $self->getViewHelper('$viewHelper263', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper263->setArguments($arguments254);
$viewHelper263->setRenderingContext($renderingContext);
$viewHelper263->setRenderChildrenClosure($renderChildrenClosure255);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output229 .= $viewHelper263->initializeArgumentsAndRender();

$output229 .= '
		';
return $output229;
};
$arguments227['__thenClosure'] = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments265 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments266 = array();
// Rendering Array
$array267 = array();
$array267['currentPage'] = 1;
$arguments266['arguments'] = $array267;
$arguments266['action'] = NULL;
$arguments266['section'] = '';
$arguments266['format'] = '';
$arguments266['ajax'] = false;
$arguments266['addQueryStringMethod'] = NULL;
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper269->setArguments($arguments266);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure268);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments265['uri'] = $viewHelper269->initializeArgumentsAndRender();
$arguments265['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments270 = array();
$arguments270['key'] = 'widget.pagination.first';
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['htmlEscape'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper272 = $self->getViewHelper('$viewHelper272', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper272->setArguments($arguments270);
$viewHelper272->setRenderingContext($renderingContext);
$viewHelper272->setRenderChildrenClosure($renderChildrenClosure271);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments265['title'] = $viewHelper272->initializeArgumentsAndRender();
$arguments265['additionalAttributes'] = NULL;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper274 = $self->getViewHelper('$viewHelper274', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper274->setArguments($arguments265);
$viewHelper274->setRenderingContext($renderingContext);
$viewHelper274->setRenderChildrenClosure($renderChildrenClosure273);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output264 .= $viewHelper274->initializeArgumentsAndRender();

$output264 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments275 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments276 = array();
// Rendering Array
$array277 = array();
$array277['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments276['arguments'] = $array277;
$arguments276['action'] = NULL;
$arguments276['section'] = '';
$arguments276['format'] = '';
$arguments276['ajax'] = false;
$arguments276['addQueryStringMethod'] = NULL;
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper279 = $self->getViewHelper('$viewHelper279', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper279->setArguments($arguments276);
$viewHelper279->setRenderingContext($renderingContext);
$viewHelper279->setRenderChildrenClosure($renderChildrenClosure278);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments275['uri'] = $viewHelper279->initializeArgumentsAndRender();
$arguments275['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments280 = array();
$arguments280['key'] = 'widget.pagination.previous';
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['htmlEscape'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper282 = $self->getViewHelper('$viewHelper282', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper282->setArguments($arguments280);
$viewHelper282->setRenderingContext($renderingContext);
$viewHelper282->setRenderChildrenClosure($renderChildrenClosure281);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments275['title'] = $viewHelper282->initializeArgumentsAndRender();
$arguments275['additionalAttributes'] = NULL;
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper284 = $self->getViewHelper('$viewHelper284', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper284->setArguments($arguments275);
$viewHelper284->setRenderingContext($renderingContext);
$viewHelper284->setRenderChildrenClosure($renderChildrenClosure283);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output264 .= $viewHelper284->initializeArgumentsAndRender();

$output264 .= '
			';
return $output264;
};
$arguments227['__elseClosure'] = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments286 = array();
$arguments286['uri'] = '';
$arguments286['icon'] = 'actions-view-paging-first-disabled';
$arguments286['title'] = '';
$arguments286['additionalAttributes'] = NULL;
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper288 = $self->getViewHelper('$viewHelper288', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper288->setArguments($arguments286);
$viewHelper288->setRenderingContext($renderingContext);
$viewHelper288->setRenderChildrenClosure($renderChildrenClosure287);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output285 .= $viewHelper288->initializeArgumentsAndRender();

$output285 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments289 = array();
$arguments289['uri'] = '';
$arguments289['icon'] = 'actions-view-paging-previous-disabled';
$arguments289['title'] = '';
$arguments289['additionalAttributes'] = NULL;
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper291 = $self->getViewHelper('$viewHelper291', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper291->setArguments($arguments289);
$viewHelper291->setRenderingContext($renderingContext);
$viewHelper291->setRenderChildrenClosure($renderChildrenClosure290);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output285 .= $viewHelper291->initializeArgumentsAndRender();

$output285 .= '
			';
return $output285;
};
$viewHelper292 = $self->getViewHelper('$viewHelper292', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper292->setArguments($arguments227);
$viewHelper292->setRenderingContext($renderingContext);
$viewHelper292->setRenderChildrenClosure($renderChildrenClosure228);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output226 .= $viewHelper292->initializeArgumentsAndRender();

$output226 .= '
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments293 = array();
// Rendering Boolean node
$arguments293['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext));
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments296 = array();
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments299 = array();
$arguments299['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments299['keepQuotes'] = false;
$arguments299['encoding'] = NULL;
$arguments299['doubleEncode'] = true;
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$value301 = ($arguments299['value'] !== NULL ? $arguments299['value'] : $renderChildrenClosure300());

$output298 .= (!is_string($value301) ? $value301 : htmlspecialchars($value301, ($arguments299['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments299['encoding'] !== NULL ? $arguments299['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments299['doubleEncode']));

$output298 .= '
				';
return $output298;
};
$viewHelper302 = $self->getViewHelper('$viewHelper302', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper302->setArguments($arguments296);
$viewHelper302->setRenderingContext($renderingContext);
$viewHelper302->setRenderChildrenClosure($renderChildrenClosure297);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output295 .= $viewHelper302->initializeArgumentsAndRender();

$output295 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments303 = array();
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments306 = array();
$arguments306['key'] = 'widget.pagination.records';
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['htmlEscape'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper308->setArguments($arguments306);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure307);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output305 .= $viewHelper308->initializeArgumentsAndRender();

$output305 .= '
				';
return $output305;
};
$viewHelper309 = $self->getViewHelper('$viewHelper309', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper309->setArguments($arguments303);
$viewHelper309->setRenderingContext($renderingContext);
$viewHelper309->setRenderChildrenClosure($renderChildrenClosure304);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output295 .= $viewHelper309->initializeArgumentsAndRender();

$output295 .= '
			';
return $output295;
};
$arguments293['__thenClosure'] = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments311 = array();
$arguments311['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments311['keepQuotes'] = false;
$arguments311['encoding'] = NULL;
$arguments311['doubleEncode'] = true;
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$value313 = ($arguments311['value'] !== NULL ? $arguments311['value'] : $renderChildrenClosure312());

$output310 .= (!is_string($value313) ? $value313 : htmlspecialchars($value313, ($arguments311['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments311['encoding'] !== NULL ? $arguments311['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments311['doubleEncode']));

$output310 .= '
				';
return $output310;
};
$arguments293['__elseClosure'] = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments315 = array();
$arguments315['key'] = 'widget.pagination.records';
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['htmlEscape'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper317 = $self->getViewHelper('$viewHelper317', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper317->setArguments($arguments315);
$viewHelper317->setRenderingContext($renderingContext);
$viewHelper317->setRenderChildrenClosure($renderChildrenClosure316);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output314 .= $viewHelper317->initializeArgumentsAndRender();

$output314 .= '
				';
return $output314;
};
$viewHelper318 = $self->getViewHelper('$viewHelper318', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper318->setArguments($arguments293);
$viewHelper318->setRenderingContext($renderingContext);
$viewHelper318->setRenderChildrenClosure($renderChildrenClosure294);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output226 .= $viewHelper318->initializeArgumentsAndRender();

$output226 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments319 = array();
$arguments319['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.startRecord', $renderingContext);
$arguments319['keepQuotes'] = false;
$arguments319['encoding'] = NULL;
$arguments319['doubleEncode'] = true;
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$value321 = ($arguments319['value'] !== NULL ? $arguments319['value'] : $renderChildrenClosure320());

$output226 .= (!is_string($value321) ? $value321 : htmlspecialchars($value321, ($arguments319['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments319['encoding'] !== NULL ? $arguments319['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments319['doubleEncode']));

$output226 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments322 = array();
$arguments322['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.endRecord', $renderingContext);
$arguments322['keepQuotes'] = false;
$arguments322['encoding'] = NULL;
$arguments322['doubleEncode'] = true;
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$value324 = ($arguments322['value'] !== NULL ? $arguments322['value'] : $renderChildrenClosure323());

$output226 .= (!is_string($value324) ? $value324 : htmlspecialchars($value324, ($arguments322['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments322['encoding'] !== NULL ? $arguments322['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments322['doubleEncode']));

$output226 .= '</span>
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments325 = array();
$arguments325['key'] = 'widget.pagination.page';
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['htmlEscape'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper327 = $self->getViewHelper('$viewHelper327', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper327->setArguments($arguments325);
$viewHelper327->setRenderingContext($renderingContext);
$viewHelper327->setRenderChildrenClosure($renderChildrenClosure326);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper327->initializeArgumentsAndRender();

$output226 .= '
			<span>
				<form id="paginator-form-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments328 = array();
$arguments328['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments328['keepQuotes'] = false;
$arguments328['encoding'] = NULL;
$arguments328['doubleEncode'] = true;
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$value330 = ($arguments328['value'] !== NULL ? $arguments328['value'] : $renderChildrenClosure329());

$output226 .= (!is_string($value330) ? $value330 : htmlspecialchars($value330, ($arguments328['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments328['encoding'] !== NULL ? $arguments328['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments328['doubleEncode']));

$output226 .= '" onsubmit="goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments331 = array();
$arguments331['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments331['keepQuotes'] = false;
$arguments331['encoding'] = NULL;
$arguments331['doubleEncode'] = true;
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$value333 = ($arguments331['value'] !== NULL ? $arguments331['value'] : $renderChildrenClosure332());

$output226 .= (!is_string($value333) ? $value333 : htmlspecialchars($value333, ($arguments331['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments331['encoding'] !== NULL ? $arguments331['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments331['doubleEncode']));

$output226 .= '(this); return false;" style="display:inline;">
				<script type="text/javascript">
					function goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments334 = array();
$arguments334['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments334['keepQuotes'] = false;
$arguments334['encoding'] = NULL;
$arguments334['doubleEncode'] = true;
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$value336 = ($arguments334['value'] !== NULL ? $arguments334['value'] : $renderChildrenClosure335());

$output226 .= (!is_string($value336) ? $value336 : htmlspecialchars($value336, ($arguments334['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments334['encoding'] !== NULL ? $arguments334['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments334['doubleEncode']));

$output226 .= '(formObject) {
						var url = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments337 = array();
// Rendering Array
$array338 = array();
$array338['currentPage'] = 987654321;
$arguments337['arguments'] = $array338;
$arguments337['action'] = NULL;
$arguments337['section'] = '';
$arguments337['format'] = '';
$arguments337['ajax'] = false;
$arguments337['addQueryStringMethod'] = NULL;
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper340 = $self->getViewHelper('$viewHelper340', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper340->setArguments($arguments337);
$viewHelper340->setRenderingContext($renderingContext);
$viewHelper340->setRenderChildrenClosure($renderChildrenClosure339);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output226 .= $viewHelper340->initializeArgumentsAndRender();

$output226 .= '\';
						var page = formObject.elements[\'paginator-target-page\'].value;
						if (page > ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments341 = array();
$arguments341['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments341['keepQuotes'] = false;
$arguments341['encoding'] = NULL;
$arguments341['doubleEncode'] = true;
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$value343 = ($arguments341['value'] !== NULL ? $arguments341['value'] : $renderChildrenClosure342());

$output226 .= (!is_string($value343) ? $value343 : htmlspecialchars($value343, ($arguments341['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments341['encoding'] !== NULL ? $arguments341['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments341['doubleEncode']));

$output226 .= ') {
							page = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments344 = array();
$arguments344['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments344['keepQuotes'] = false;
$arguments344['encoding'] = NULL;
$arguments344['doubleEncode'] = true;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$value346 = ($arguments344['value'] !== NULL ? $arguments344['value'] : $renderChildrenClosure345());

$output226 .= (!is_string($value346) ? $value346 : htmlspecialchars($value346, ($arguments344['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments344['encoding'] !== NULL ? $arguments344['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments344['doubleEncode']));

$output226 .= ';
						} else if (page < 1) {
							page = 1;
						}
						url = url.replace(\'987654321\', page);
						self.location.href= url;
					}
				</script>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments347 = array();
$output348 = '';

$output348 .= 'paginator-';

$output348 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments347['id'] = $output348;
$arguments347['name'] = 'paginator-target-page';
$arguments347['size'] = '5';
$arguments347['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments347['additionalAttributes'] = NULL;
$arguments347['required'] = NULL;
$arguments347['type'] = 'text';
$arguments347['property'] = NULL;
$arguments347['autofocus'] = NULL;
$arguments347['disabled'] = NULL;
$arguments347['maxlength'] = NULL;
$arguments347['readonly'] = NULL;
$arguments347['placeholder'] = NULL;
$arguments347['errorClass'] = 'f3-form-error';
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper350 = $self->getViewHelper('$viewHelper350', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper350->setArguments($arguments347);
$viewHelper350->setRenderingContext($renderingContext);
$viewHelper350->setRenderChildrenClosure($renderChildrenClosure349);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output226 .= $viewHelper350->initializeArgumentsAndRender();

$output226 .= '
				</form>
			</span>
			/ ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments351 = array();
$arguments351['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments351['keepQuotes'] = false;
$arguments351['encoding'] = NULL;
$arguments351['doubleEncode'] = true;
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$value353 = ($arguments351['value'] !== NULL ? $arguments351['value'] : $renderChildrenClosure352());

$output226 .= (!is_string($value353) ? $value353 : htmlspecialchars($value353, ($arguments351['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments351['encoding'] !== NULL ? $arguments351['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments351['doubleEncode']));

$output226 .= '
		</span>
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments354 = array();
// Rendering Boolean node
$arguments354['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasMorePages', $renderingContext));
$arguments354['then'] = NULL;
$arguments354['else'] = NULL;
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments357 = array();
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments360 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments361 = array();
// Rendering Array
$array362 = array();
$array362['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments361['arguments'] = $array362;
$arguments361['action'] = NULL;
$arguments361['section'] = '';
$arguments361['format'] = '';
$arguments361['ajax'] = false;
$arguments361['addQueryStringMethod'] = NULL;
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper364 = $self->getViewHelper('$viewHelper364', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper364->setArguments($arguments361);
$viewHelper364->setRenderingContext($renderingContext);
$viewHelper364->setRenderChildrenClosure($renderChildrenClosure363);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments360['uri'] = $viewHelper364->initializeArgumentsAndRender();
$arguments360['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments365 = array();
$arguments365['key'] = 'widget.pagination.next';
$arguments365['id'] = NULL;
$arguments365['default'] = NULL;
$arguments365['htmlEscape'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extensionName'] = NULL;
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper367 = $self->getViewHelper('$viewHelper367', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper367->setArguments($arguments365);
$viewHelper367->setRenderingContext($renderingContext);
$viewHelper367->setRenderChildrenClosure($renderChildrenClosure366);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments360['title'] = $viewHelper367->initializeArgumentsAndRender();
$arguments360['additionalAttributes'] = NULL;
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper369 = $self->getViewHelper('$viewHelper369', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper369->setArguments($arguments360);
$viewHelper369->setRenderingContext($renderingContext);
$viewHelper369->setRenderChildrenClosure($renderChildrenClosure368);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output359 .= $viewHelper369->initializeArgumentsAndRender();

$output359 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments370 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments371 = array();
// Rendering Array
$array372 = array();
$array372['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments371['arguments'] = $array372;
$arguments371['action'] = NULL;
$arguments371['section'] = '';
$arguments371['format'] = '';
$arguments371['ajax'] = false;
$arguments371['addQueryStringMethod'] = NULL;
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper374 = $self->getViewHelper('$viewHelper374', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper374->setArguments($arguments371);
$viewHelper374->setRenderingContext($renderingContext);
$viewHelper374->setRenderChildrenClosure($renderChildrenClosure373);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments370['uri'] = $viewHelper374->initializeArgumentsAndRender();
$arguments370['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments375 = array();
$arguments375['key'] = 'widget.pagination.last';
$arguments375['id'] = NULL;
$arguments375['default'] = NULL;
$arguments375['htmlEscape'] = NULL;
$arguments375['arguments'] = NULL;
$arguments375['extensionName'] = NULL;
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper377 = $self->getViewHelper('$viewHelper377', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper377->setArguments($arguments375);
$viewHelper377->setRenderingContext($renderingContext);
$viewHelper377->setRenderChildrenClosure($renderChildrenClosure376);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments370['title'] = $viewHelper377->initializeArgumentsAndRender();
$arguments370['additionalAttributes'] = NULL;
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper379 = $self->getViewHelper('$viewHelper379', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper379->setArguments($arguments370);
$viewHelper379->setRenderingContext($renderingContext);
$viewHelper379->setRenderChildrenClosure($renderChildrenClosure378);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output359 .= $viewHelper379->initializeArgumentsAndRender();

$output359 .= '
			';
return $output359;
};
$viewHelper380 = $self->getViewHelper('$viewHelper380', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper380->setArguments($arguments357);
$viewHelper380->setRenderingContext($renderingContext);
$viewHelper380->setRenderChildrenClosure($renderChildrenClosure358);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output356 .= $viewHelper380->initializeArgumentsAndRender();

$output356 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments381 = array();
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments384 = array();
$arguments384['uri'] = '';
$arguments384['icon'] = 'actions-view-paging-next-disabled';
$arguments384['title'] = '';
$arguments384['additionalAttributes'] = NULL;
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper386 = $self->getViewHelper('$viewHelper386', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper386->setArguments($arguments384);
$viewHelper386->setRenderingContext($renderingContext);
$viewHelper386->setRenderChildrenClosure($renderChildrenClosure385);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output383 .= $viewHelper386->initializeArgumentsAndRender();

$output383 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments387 = array();
$arguments387['uri'] = '';
$arguments387['icon'] = 'actions-view-paging-last-disabled';
$arguments387['title'] = '';
$arguments387['additionalAttributes'] = NULL;
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper389 = $self->getViewHelper('$viewHelper389', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper389->setArguments($arguments387);
$viewHelper389->setRenderingContext($renderingContext);
$viewHelper389->setRenderChildrenClosure($renderChildrenClosure388);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output383 .= $viewHelper389->initializeArgumentsAndRender();

$output383 .= '
			';
return $output383;
};
$viewHelper390 = $self->getViewHelper('$viewHelper390', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper390->setArguments($arguments381);
$viewHelper390->setRenderingContext($renderingContext);
$viewHelper390->setRenderChildrenClosure($renderChildrenClosure382);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output356 .= $viewHelper390->initializeArgumentsAndRender();

$output356 .= '
		';
return $output356;
};
$arguments354['__thenClosure'] = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments392 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments393 = array();
// Rendering Array
$array394 = array();
$array394['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments393['arguments'] = $array394;
$arguments393['action'] = NULL;
$arguments393['section'] = '';
$arguments393['format'] = '';
$arguments393['ajax'] = false;
$arguments393['addQueryStringMethod'] = NULL;
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper396 = $self->getViewHelper('$viewHelper396', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper396->setArguments($arguments393);
$viewHelper396->setRenderingContext($renderingContext);
$viewHelper396->setRenderChildrenClosure($renderChildrenClosure395);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments392['uri'] = $viewHelper396->initializeArgumentsAndRender();
$arguments392['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments397 = array();
$arguments397['key'] = 'widget.pagination.next';
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['htmlEscape'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper399 = $self->getViewHelper('$viewHelper399', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper399->setArguments($arguments397);
$viewHelper399->setRenderingContext($renderingContext);
$viewHelper399->setRenderChildrenClosure($renderChildrenClosure398);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments392['title'] = $viewHelper399->initializeArgumentsAndRender();
$arguments392['additionalAttributes'] = NULL;
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper401 = $self->getViewHelper('$viewHelper401', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper401->setArguments($arguments392);
$viewHelper401->setRenderingContext($renderingContext);
$viewHelper401->setRenderChildrenClosure($renderChildrenClosure400);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output391 .= $viewHelper401->initializeArgumentsAndRender();

$output391 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments402 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments403 = array();
// Rendering Array
$array404 = array();
$array404['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments403['arguments'] = $array404;
$arguments403['action'] = NULL;
$arguments403['section'] = '';
$arguments403['format'] = '';
$arguments403['ajax'] = false;
$arguments403['addQueryStringMethod'] = NULL;
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper406 = $self->getViewHelper('$viewHelper406', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper406->setArguments($arguments403);
$viewHelper406->setRenderingContext($renderingContext);
$viewHelper406->setRenderChildrenClosure($renderChildrenClosure405);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments402['uri'] = $viewHelper406->initializeArgumentsAndRender();
$arguments402['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments407 = array();
$arguments407['key'] = 'widget.pagination.last';
$arguments407['id'] = NULL;
$arguments407['default'] = NULL;
$arguments407['htmlEscape'] = NULL;
$arguments407['arguments'] = NULL;
$arguments407['extensionName'] = NULL;
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper409 = $self->getViewHelper('$viewHelper409', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper409->setArguments($arguments407);
$viewHelper409->setRenderingContext($renderingContext);
$viewHelper409->setRenderChildrenClosure($renderChildrenClosure408);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments402['title'] = $viewHelper409->initializeArgumentsAndRender();
$arguments402['additionalAttributes'] = NULL;
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper411 = $self->getViewHelper('$viewHelper411', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper411->setArguments($arguments402);
$viewHelper411->setRenderingContext($renderingContext);
$viewHelper411->setRenderChildrenClosure($renderChildrenClosure410);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output391 .= $viewHelper411->initializeArgumentsAndRender();

$output391 .= '
			';
return $output391;
};
$arguments354['__elseClosure'] = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments413 = array();
$arguments413['uri'] = '';
$arguments413['icon'] = 'actions-view-paging-next-disabled';
$arguments413['title'] = '';
$arguments413['additionalAttributes'] = NULL;
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper415 = $self->getViewHelper('$viewHelper415', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper415->setArguments($arguments413);
$viewHelper415->setRenderingContext($renderingContext);
$viewHelper415->setRenderChildrenClosure($renderChildrenClosure414);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output412 .= $viewHelper415->initializeArgumentsAndRender();

$output412 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments416 = array();
$arguments416['uri'] = '';
$arguments416['icon'] = 'actions-view-paging-last-disabled';
$arguments416['title'] = '';
$arguments416['additionalAttributes'] = NULL;
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper418 = $self->getViewHelper('$viewHelper418', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper418->setArguments($arguments416);
$viewHelper418->setRenderingContext($renderingContext);
$viewHelper418->setRenderChildrenClosure($renderChildrenClosure417);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output412 .= $viewHelper418->initializeArgumentsAndRender();

$output412 .= '
			';
return $output412;
};
$viewHelper419 = $self->getViewHelper('$viewHelper419', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper419->setArguments($arguments354);
$viewHelper419->setRenderingContext($renderingContext);
$viewHelper419->setRenderChildrenClosure($renderChildrenClosure355);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output226 .= $viewHelper419->initializeArgumentsAndRender();

$output226 .= '
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments420 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments421 = array();
// Rendering Array
$array422 = array();
$array422['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments421['arguments'] = $array422;
$arguments421['action'] = NULL;
$arguments421['section'] = '';
$arguments421['format'] = '';
$arguments421['ajax'] = false;
$arguments421['addQueryStringMethod'] = NULL;
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper424 = $self->getViewHelper('$viewHelper424', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper424->setArguments($arguments421);
$viewHelper424->setRenderingContext($renderingContext);
$viewHelper424->setRenderChildrenClosure($renderChildrenClosure423);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments420['uri'] = $viewHelper424->initializeArgumentsAndRender();
$arguments420['icon'] = 'actions-system-refresh';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments425 = array();
$arguments425['key'] = 'widget.pagination.refresh';
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['htmlEscape'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper427 = $self->getViewHelper('$viewHelper427', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper427->setArguments($arguments425);
$viewHelper427->setRenderingContext($renderingContext);
$viewHelper427->setRenderChildrenClosure($renderChildrenClosure426);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments420['title'] = $viewHelper427->initializeArgumentsAndRender();
$arguments420['additionalAttributes'] = NULL;
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper429 = $self->getViewHelper('$viewHelper429', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper429->setArguments($arguments420);
$viewHelper429->setRenderingContext($renderingContext);
$viewHelper429->setRenderChildrenClosure($renderChildrenClosure428);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output226 .= $viewHelper429->initializeArgumentsAndRender();

$output226 .= '
	</div>
';
return $output226;
};

$output204 .= '';

$output204 .= '
';

return $output204;
}


}
#1438519315    113281    