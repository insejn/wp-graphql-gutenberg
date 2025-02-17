<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ae93f46350550e5030837be01a3fdf8
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\helper\\' => 12,
        ),
        'W' => 
        array (
            'WPGraphqlGutenberg\\' => 19,
        ),
        'V' => 
        array (
            'VariableAnalysis\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'P' => 
        array (
            'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 57,
        ),
        'O' => 
        array (
            'Opis\\JsonSchema\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper',
        ),
        'WPGraphqlGutenberg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'VariableAnalysis\\' => 
        array (
            0 => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'Opis\\JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/json-schema/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Opis\\JsonSchema\\Exception\\AbstractSchemaException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/AbstractSchemaException.php',
        'Opis\\JsonSchema\\Exception\\DuplicateSchemaException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/DuplicateSchemaException.php',
        'Opis\\JsonSchema\\Exception\\FilterNotFoundException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/FilterNotFoundException.php',
        'Opis\\JsonSchema\\Exception\\InvalidJsonPointerException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/InvalidJsonPointerException.php',
        'Opis\\JsonSchema\\Exception\\InvalidSchemaDraftException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/InvalidSchemaDraftException.php',
        'Opis\\JsonSchema\\Exception\\InvalidSchemaException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/InvalidSchemaException.php',
        'Opis\\JsonSchema\\Exception\\InvalidSchemaIdException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/InvalidSchemaIdException.php',
        'Opis\\JsonSchema\\Exception\\SchemaDraftNotSupportedException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/SchemaDraftNotSupportedException.php',
        'Opis\\JsonSchema\\Exception\\SchemaKeywordException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/SchemaKeywordException.php',
        'Opis\\JsonSchema\\Exception\\SchemaNotFoundException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/SchemaNotFoundException.php',
        'Opis\\JsonSchema\\Exception\\UnknownMediaTypeException' => __DIR__ . '/..' . '/opis/json-schema/src/Exception/UnknownMediaTypeException.php',
        'Opis\\JsonSchema\\FilterContainer' => __DIR__ . '/..' . '/opis/json-schema/src/FilterContainer.php',
        'Opis\\JsonSchema\\FormatContainer' => __DIR__ . '/..' . '/opis/json-schema/src/FormatContainer.php',
        'Opis\\JsonSchema\\Formats\\AbstractFormat' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/AbstractFormat.php',
        'Opis\\JsonSchema\\Formats\\Date' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Date.php',
        'Opis\\JsonSchema\\Formats\\DateTime' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/DateTime.php',
        'Opis\\JsonSchema\\Formats\\Email' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Email.php',
        'Opis\\JsonSchema\\Formats\\Hostname' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Hostname.php',
        'Opis\\JsonSchema\\Formats\\IPv4' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/IPv4.php',
        'Opis\\JsonSchema\\Formats\\IPv6' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/IPv6.php',
        'Opis\\JsonSchema\\Formats\\IdnEmail' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/IdnEmail.php',
        'Opis\\JsonSchema\\Formats\\IdnHostname' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/IdnHostname.php',
        'Opis\\JsonSchema\\Formats\\Iri' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Iri.php',
        'Opis\\JsonSchema\\Formats\\IriReference' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/IriReference.php',
        'Opis\\JsonSchema\\Formats\\JsonPointer' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/JsonPointer.php',
        'Opis\\JsonSchema\\Formats\\Regex' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Regex.php',
        'Opis\\JsonSchema\\Formats\\RelativeJsonPointer' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/RelativeJsonPointer.php',
        'Opis\\JsonSchema\\Formats\\Time' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Time.php',
        'Opis\\JsonSchema\\Formats\\Uri' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Uri.php',
        'Opis\\JsonSchema\\Formats\\UriReference' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/UriReference.php',
        'Opis\\JsonSchema\\Formats\\UriTemplate' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/UriTemplate.php',
        'Opis\\JsonSchema\\Formats\\Uuid' => __DIR__ . '/..' . '/opis/json-schema/src/Formats/Uuid.php',
        'Opis\\JsonSchema\\IFilter' => __DIR__ . '/..' . '/opis/json-schema/src/IFilter.php',
        'Opis\\JsonSchema\\IFilterContainer' => __DIR__ . '/..' . '/opis/json-schema/src/IFilterContainer.php',
        'Opis\\JsonSchema\\IFormat' => __DIR__ . '/..' . '/opis/json-schema/src/IFormat.php',
        'Opis\\JsonSchema\\IFormatContainer' => __DIR__ . '/..' . '/opis/json-schema/src/IFormatContainer.php',
        'Opis\\JsonSchema\\IMediaType' => __DIR__ . '/..' . '/opis/json-schema/src/IMediaType.php',
        'Opis\\JsonSchema\\IMediaTypeContainer' => __DIR__ . '/..' . '/opis/json-schema/src/IMediaTypeContainer.php',
        'Opis\\JsonSchema\\ISchema' => __DIR__ . '/..' . '/opis/json-schema/src/ISchema.php',
        'Opis\\JsonSchema\\ISchemaLoader' => __DIR__ . '/..' . '/opis/json-schema/src/ISchemaLoader.php',
        'Opis\\JsonSchema\\IValidator' => __DIR__ . '/..' . '/opis/json-schema/src/IValidator.php',
        'Opis\\JsonSchema\\IValidatorHelper' => __DIR__ . '/..' . '/opis/json-schema/src/IValidatorHelper.php',
        'Opis\\JsonSchema\\JsonPointer' => __DIR__ . '/..' . '/opis/json-schema/src/JsonPointer.php',
        'Opis\\JsonSchema\\Loaders\\File' => __DIR__ . '/..' . '/opis/json-schema/src/Loaders/File.php',
        'Opis\\JsonSchema\\Loaders\\Memory' => __DIR__ . '/..' . '/opis/json-schema/src/Loaders/Memory.php',
        'Opis\\JsonSchema\\MediaTypeContainer' => __DIR__ . '/..' . '/opis/json-schema/src/MediaTypeContainer.php',
        'Opis\\JsonSchema\\MediaTypes\\Json' => __DIR__ . '/..' . '/opis/json-schema/src/MediaTypes/Json.php',
        'Opis\\JsonSchema\\MediaTypes\\Text' => __DIR__ . '/..' . '/opis/json-schema/src/MediaTypes/Text.php',
        'Opis\\JsonSchema\\Schema' => __DIR__ . '/..' . '/opis/json-schema/src/Schema.php',
        'Opis\\JsonSchema\\URI' => __DIR__ . '/..' . '/opis/json-schema/src/URI.php',
        'Opis\\JsonSchema\\ValidationError' => __DIR__ . '/..' . '/opis/json-schema/src/ValidationError.php',
        'Opis\\JsonSchema\\ValidationResult' => __DIR__ . '/..' . '/opis/json-schema/src/ValidationResult.php',
        'Opis\\JsonSchema\\Validator' => __DIR__ . '/..' . '/opis/json-schema/src/Validator.php',
        'Opis\\JsonSchema\\ValidatorHelper' => __DIR__ . '/..' . '/opis/json-schema/src/ValidatorHelper.php',
        'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\Plugin' => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src/Plugin.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\CssSelector\\CssSelectorConverter' => __DIR__ . '/..' . '/symfony/css-selector/CssSelectorConverter.php',
        'Symfony\\Component\\CssSelector\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ExceptionInterface.php',
        'Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ExpressionErrorException.php',
        'Symfony\\Component\\CssSelector\\Exception\\InternalErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/InternalErrorException.php',
        'Symfony\\Component\\CssSelector\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ParseException.php',
        'Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/SyntaxErrorException.php',
        'Symfony\\Component\\CssSelector\\Node\\AbstractNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/AbstractNode.php',
        'Symfony\\Component\\CssSelector\\Node\\AttributeNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/AttributeNode.php',
        'Symfony\\Component\\CssSelector\\Node\\ClassNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/ClassNode.php',
        'Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/CombinedSelectorNode.php',
        'Symfony\\Component\\CssSelector\\Node\\ElementNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/ElementNode.php',
        'Symfony\\Component\\CssSelector\\Node\\FunctionNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/FunctionNode.php',
        'Symfony\\Component\\CssSelector\\Node\\HashNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/HashNode.php',
        'Symfony\\Component\\CssSelector\\Node\\NegationNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/NegationNode.php',
        'Symfony\\Component\\CssSelector\\Node\\NodeInterface' => __DIR__ . '/..' . '/symfony/css-selector/Node/NodeInterface.php',
        'Symfony\\Component\\CssSelector\\Node\\PseudoNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/PseudoNode.php',
        'Symfony\\Component\\CssSelector\\Node\\SelectorNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/SelectorNode.php',
        'Symfony\\Component\\CssSelector\\Node\\Specificity' => __DIR__ . '/..' . '/symfony/css-selector/Node/Specificity.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\CommentHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/CommentHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/HandlerInterface.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\HashHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/HashHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\IdentifierHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/IdentifierHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/NumberHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\StringHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/StringHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\WhitespaceHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/WhitespaceHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Parser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Parser.php',
        'Symfony\\Component\\CssSelector\\Parser\\ParserInterface' => __DIR__ . '/..' . '/symfony/css-selector/Parser/ParserInterface.php',
        'Symfony\\Component\\CssSelector\\Parser\\Reader' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Reader.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/ClassParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/ElementParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/EmptyStringParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/HashParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Token' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Token.php',
        'Symfony\\Component\\CssSelector\\Parser\\TokenStream' => __DIR__ . '/..' . '/symfony/css-selector/Parser/TokenStream.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/Tokenizer.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\AbstractExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/AbstractExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\AttributeMatchingExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\CombinationExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/CombinationExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\ExtensionInterface' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/ExtensionInterface.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\FunctionExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/FunctionExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/HtmlExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\NodeExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/NodeExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\PseudoClassExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/PseudoClassExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Translator' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Translator.php',
        'Symfony\\Component\\CssSelector\\XPath\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/css-selector/XPath/TranslatorInterface.php',
        'Symfony\\Component\\CssSelector\\XPath\\XPathExpr' => __DIR__ . '/..' . '/symfony/css-selector/XPath/XPathExpr.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'VariableAnalysis\\Lib\\Constants' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/Constants.php',
        'VariableAnalysis\\Lib\\EnumInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/EnumInfo.php',
        'VariableAnalysis\\Lib\\ForLoopInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ForLoopInfo.php',
        'VariableAnalysis\\Lib\\Helpers' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/Helpers.php',
        'VariableAnalysis\\Lib\\ScopeInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeInfo.php',
        'VariableAnalysis\\Lib\\ScopeManager' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeManager.php',
        'VariableAnalysis\\Lib\\ScopeType' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeType.php',
        'VariableAnalysis\\Lib\\VariableInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/VariableInfo.php',
        'VariableAnalysis\\Sniffs\\CodeAnalysis\\VariableAnalysisSniff' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Sniffs/CodeAnalysis/VariableAnalysisSniff.php',
        'WPGraphQLGutenberg\\Admin\\Editor' => __DIR__ . '/../..' . '/src/Admin/Editor.php',
        'WPGraphQLGutenberg\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'WPGraphQLGutenberg\\Blocks\\Block' => __DIR__ . '/../..' . '/src/Blocks/Block.php',
        'WPGraphQLGutenberg\\Blocks\\Registry' => __DIR__ . '/../..' . '/src/Blocks/Registry.php',
        'WPGraphQLGutenberg\\Blocks\\RegistryNotSourcedException' => __DIR__ . '/../..' . '/src/Blocks/RegistryNotSourcedException.php',
        'WPGraphQLGutenberg\\Blocks\\Utils' => __DIR__ . '/../..' . '/src/Blocks/Utils.php',
        'WPGraphQLGutenberg\\PostTypes\\BlockEditorPreview' => __DIR__ . '/../..' . '/src/PostTypes/BlockEditorPreview.php',
        'WPGraphQLGutenberg\\PostTypes\\ReusableBlock' => __DIR__ . '/../..' . '/src/PostTypes/ReusableBlock.php',
        'WPGraphQLGutenberg\\Rest\\Rest' => __DIR__ . '/../..' . '/src/Rest/Rest.php',
        'WPGraphQLGutenberg\\Schema\\Schema' => __DIR__ . '/../..' . '/src/Schema/Schema.php',
        'WPGraphQLGutenberg\\Schema\\Types\\BlockTypes' => __DIR__ . '/../..' . '/src/Schema/Types/BlockTypes.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Connection\\BlockEditorContentNodeConnection' => __DIR__ . '/../..' . '/src/Schema/Types/Connection/BlockEditorContentNodeConnection.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Connection\\Blocks\\CoreImageBlockToMediaItemConnection' => __DIR__ . '/../..' . '/src/Schema/Types/Connection/Blocks/CoreImageBlockToMediaItemConnection.php',
        'WPGraphQLGutenberg\\Schema\\Types\\InterfaceType\\Block' => __DIR__ . '/../..' . '/src/Schema/Types/InterfaceType/Block.php',
        'WPGraphQLGutenberg\\Schema\\Types\\InterfaceType\\BlockEditorContentNode' => __DIR__ . '/../..' . '/src/Schema/Types/InterfaceType/BlockEditorContentNode.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Object\\ReusableBlock' => __DIR__ . '/../..' . '/src/Schema/Types/Object/ReusableBlock.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Scalar\\Scalar' => __DIR__ . '/../..' . '/src/Schema/Types/Scalar/Scalar.php',
        'WPGraphQLGutenberg\\Schema\\Utils' => __DIR__ . '/../..' . '/src/Schema/Utils.php',
        'WPGraphQLGutenberg\\Server\\Server' => __DIR__ . '/../..' . '/src/Server/Server.php',
        'WPGraphQLGutenberg\\Server\\ServerException' => __DIR__ . '/../..' . '/src/Server/ServerException.php',
        'voku\\helper\\AbstractDomParser' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractDomParser.php',
        'voku\\helper\\AbstractSimpleHtmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleHtmlDom.php',
        'voku\\helper\\AbstractSimpleHtmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleHtmlDomNode.php',
        'voku\\helper\\AbstractSimpleXmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleXmlDom.php',
        'voku\\helper\\AbstractSimpleXmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/AbstractSimpleXmlDomNode.php',
        'voku\\helper\\DomParserInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/DomParserInterface.php',
        'voku\\helper\\HtmlDomHelper' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/HtmlDomHelper.php',
        'voku\\helper\\HtmlDomParser' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/HtmlDomParser.php',
        'voku\\helper\\SelectorConverter' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SelectorConverter.php',
        'voku\\helper\\SimpleHtmlAttributes' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlAttributes.php',
        'voku\\helper\\SimpleHtmlAttributesInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlAttributesInterface.php',
        'voku\\helper\\SimpleHtmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDom.php',
        'voku\\helper\\SimpleHtmlDomBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomBlank.php',
        'voku\\helper\\SimpleHtmlDomInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomInterface.php',
        'voku\\helper\\SimpleHtmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomNode.php',
        'voku\\helper\\SimpleHtmlDomNodeBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomNodeBlank.php',
        'voku\\helper\\SimpleHtmlDomNodeInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleHtmlDomNodeInterface.php',
        'voku\\helper\\SimpleXmlDom' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDom.php',
        'voku\\helper\\SimpleXmlDomBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomBlank.php',
        'voku\\helper\\SimpleXmlDomInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomInterface.php',
        'voku\\helper\\SimpleXmlDomNode' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomNode.php',
        'voku\\helper\\SimpleXmlDomNodeBlank' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomNodeBlank.php',
        'voku\\helper\\SimpleXmlDomNodeInterface' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/SimpleXmlDomNodeInterface.php',
        'voku\\helper\\XmlDomParser' => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper/XmlDomParser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ae93f46350550e5030837be01a3fdf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ae93f46350550e5030837be01a3fdf8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ae93f46350550e5030837be01a3fdf8::$classMap;

        }, null, ClassLoader::class);
    }
}
