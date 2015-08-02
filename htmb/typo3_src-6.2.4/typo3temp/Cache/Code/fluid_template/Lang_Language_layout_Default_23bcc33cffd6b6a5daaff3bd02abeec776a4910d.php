<?php
class FluidCache_Lang_Language_layout_Default_23bcc33cffd6b6a5daaff3bd02abeec776a4910d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$arguments0 = array();
// Rendering Boolean node
$arguments0['enableJumpToUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments0['enableClickMenu'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments0['loadPrototype'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments0['loadScriptaculous'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments0['loadExtJs'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments0['loadJQuery'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
// Rendering Array
$array1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments2 = array();
$arguments2['path'] = 'StyleSheet/LangModule.css';
$arguments2['extensionName'] = NULL;
$arguments2['absolute'] = false;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array1['0'] = $viewHelper4->initializeArgumentsAndRender();
$arguments0['includeCssFiles'] = $array1;
// Rendering Array
$array5 = array();
$array5['0'] = 'contrib/jquery/jquery.dataTables-1.9.4.min.js';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments6 = array();
$arguments6['path'] = 'JavaScript/LangModule.js';
$arguments6['extensionName'] = NULL;
$arguments6['absolute'] = false;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array5['1'] = $viewHelper8->initializeArgumentsAndRender();
$arguments0['includeJsFiles'] = $array5;
// Rendering Array
$array9 = array();
$array9['0'] = 'flashmessage.error';
$array9['1'] = 'flashmessage.information';
$array9['2'] = 'flashmessage.success';
$array9['3'] = 'flashmessage.multipleErrors';
$array9['4'] = 'flashmessage.updateComplete';
$array9['5'] = 'flashmessage.canceled';
$arguments0['addJsInlineLabels'] = $array9;
$arguments0['pageTitle'] = '';
$arguments0['scriptaculousModule'] = '';
$arguments0['loadExtJsTheme'] = true;
$arguments0['extJsAdapter'] = '';
$arguments0['enableExtJsDebug'] = false;
$arguments0['addCssFile'] = NULL;
$arguments0['addJsFile'] = NULL;
$arguments0['includeCsh'] = true;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
	<div class="typo3-fullDoc">

		<div id="typo3-docheader">
			<div class="typo3-docheader-functions">
				<div class="left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$arguments12 = array();
$arguments12['table'] = NULL;
$arguments12['field'] = '';
$arguments12['iconOnly'] = false;
$arguments12['styleAttributes'] = '';
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper

$output11 .= $viewHelper14->initializeArgumentsAndRender();

$output11 .= '
				</div>
				<div class="right">
				</div>
			</div>
			<div class="typo3-docheader-buttons">
				<div class="left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['section'] = 'iconButtons';
$arguments15['partial'] = NULL;
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

$output11 .= $viewHelper17->initializeArgumentsAndRender();

$output11 .= '
				</div>
				<div class="right">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments18 = array();
$arguments18['getVars'] = array (
);
$arguments18['setVars'] = array (
);
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper

$output11 .= $viewHelper20->initializeArgumentsAndRender();

$output11 .= '
				</div>
			</div>
		</div>

		<div id="typo3-docbody">
			<div id="typo3-inner-docbody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments21 = array();
$arguments21['section'] = 'content';
$arguments21['partial'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['optional'] = false;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output11 .= $viewHelper23->initializeArgumentsAndRender();

$output11 .= '
			</div>
		</div>

	</div>
';
return $output11;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper24->setArguments($arguments0);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper

return $viewHelper24->initializeArgumentsAndRender();
}


}
#1438518872    7769      