<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>pyparsing.CaselessLiteral</title>
  <link rel="stylesheet" href="epydoc.css" type="text/css" />
  <script type="text/javascript" src="epydoc.js"></script>
</head>

<body bgcolor="white" text="black" link="blue" vlink="#204080"
      alink="#204080">
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="pyparsing-module.html">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.html">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.html">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.html">Help</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Project homepage -->
      <th class="navbar" align="right" width="100%">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr><th class="navbar" align="center"
            >pyparsing</th>
          </tr></table></th>
  </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td width="100%">
      <span class="breadcrumbs">
        <a href="pyparsing-module.html">Module&nbsp;pyparsing</a> ::
        Class&nbsp;CaselessLiteral
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="pyparsing.CaselessLiteral-class.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class CaselessLiteral</h1><p class="nomargin-top"><span class="codelink"><a href="pyparsing-pysrc.html#CaselessLiteral">source&nbsp;code</a></span></p>
<pre class="base-tree">
   object --+            
            |            
<a href="pyparsing.ParserElement-class.html">ParserElement</a> --+        
                |        
            <a href="pyparsing.Token-class.html">Token</a> --+    
                    |    
              <a href="pyparsing.Literal-class.html" onclick="show_private();">Literal</a> --+
                        |
                       <strong class="uidshort">CaselessLiteral</strong>
</pre>

<hr />
<p>Token to match a specified string, ignoring case of letters. Note: the
  matched results will always be in the case of the given match string, NOT
  the case of the input text.</p>

<!-- ==================== NESTED CLASSES ==================== -->
<a name="section-NestedClasses"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Nested Classes</span></td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="pyparsing.ParserElement-class.html">ParserElement</a></code></b>:
      <code><a href="pyparsing.Literal-class.html">literalStringClass</a></code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== INSTANCE METHODS ==================== -->
<a name="section-InstanceMethods"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Instance Methods</span></td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="pyparsing.CaselessLiteral-class.html#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">matchString</span>)</span><br />
      x.__init__(...) initializes x; see help(type(x)) for signature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#CaselessLiteral.__init__">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="pyparsing.CaselessLiteral-class.html#parseImpl" class="summary-sig-name">parseImpl</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">loc</span>,
        <span class="summary-sig-arg">doActions</span>=<span class="summary-sig-default">True</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#CaselessLiteral.parseImpl">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="pyparsing.ParserElement-class.html">ParserElement</a></code></b>:
      <code><a href="pyparsing.ParserElement-class.html#__add__">__add__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__and__">__and__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__call__">__call__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__eq__">__eq__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__hash__">__hash__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__invert__">__invert__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__mul__">__mul__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__ne__">__ne__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__or__">__or__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__radd__">__radd__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__rand__">__rand__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__repr__">__repr__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__req__">__req__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__rmul__">__rmul__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__rne__">__rne__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__ror__">__ror__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__rsub__">__rsub__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__rxor__">__rxor__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__str__">__str__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__sub__">__sub__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#__xor__">__xor__</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#addCondition">addCondition</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#addParseAction">addParseAction</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#canParseNext">canParseNext</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#checkRecursion">checkRecursion</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#copy">copy</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#ignore">ignore</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#leaveWhitespace">leaveWhitespace</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#parseFile">parseFile</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#parseString">parseString</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#parseWithTabs">parseWithTabs</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#postParse">postParse</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#preParse">preParse</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#runTests">runTests</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#scanString">scanString</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#searchString">searchString</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setBreak">setBreak</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setDebug">setDebug</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setDebugActions">setDebugActions</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setFailAction">setFailAction</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setName">setName</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setParseAction">setParseAction</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setResultsName">setResultsName</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setWhitespaceChars">setWhitespaceChars</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#streamline">streamline</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#suppress">suppress</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#transformString">transformString</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#tryParse">tryParse</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#validate">validate</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__delattr__</code>,
      <code>__format__</code>,
      <code>__getattribute__</code>,
      <code>__new__</code>,
      <code>__reduce__</code>,
      <code>__reduce_ex__</code>,
      <code>__setattr__</code>,
      <code>__sizeof__</code>,
      <code>__subclasshook__</code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== STATIC METHODS ==================== -->
<a name="section-StaticMethods"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Static Methods</span></td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="pyparsing.ParserElement-class.html">ParserElement</a></code></b>:
      <code><a href="pyparsing.ParserElement-class.html#enablePackrat">enablePackrat</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#inlineLiteralsUsing">inlineLiteralsUsing</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#resetCache">resetCache</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#setDefaultWhitespaceChars">setDefaultWhitespaceChars</a></code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== CLASS VARIABLES ==================== -->
<a name="section-ClassVariables"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Class Variables</span></td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="pyparsing.Literal-class.html" onclick="show_private();">Literal</a></code></b>:
      <code><a href="pyparsing.Literal-class.html#__slotnames__">__slotnames__</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="pyparsing.ParserElement-class.html">ParserElement</a></code></b>:
      <code><a href="pyparsing.ParserElement-class.html#DEFAULT_WHITE_CHARS">DEFAULT_WHITE_CHARS</a></code>,
      <code><a href="pyparsing.ParserElement-class.html#verbose_stacktrace">verbose_stacktrace</a></code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== PROPERTIES ==================== -->
<a name="section-Properties"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Properties</span></td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__class__</code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== METHOD DETAILS ==================== -->
<a name="section-MethodDetails"></a>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Method Details</span></td>
</tr>
</table>
<a name="__init__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">matchString</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#CaselessLiteral.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>x.__init__(...) initializes x; see help(type(x)) for signature</p>
  <dl class="fields">
    <dt>Overrides:
        object.__init__
        <dd><em class="note">(inherited documentation)</em></dd>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="parseImpl"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">parseImpl</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">instring</span>,
        <span class="sig-arg">loc</span>,
        <span class="sig-arg">doActions</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#CaselessLiteral.parseImpl">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  
  <dl class="fields">
    <dt>Overrides:
        <a href="pyparsing.ParserElement-class.html#parseImpl">ParserElement.parseImpl</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<br />
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="pyparsing-module.html">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.html">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.html">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.html">Help</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Project homepage -->
      <th class="navbar" align="right" width="100%">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr><th class="navbar" align="center"
            >pyparsing</th>
          </tr></table></th>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%%">
  <tr>
    <td align="left" class="footer">
    Generated by Epydoc 3.0.1 on Mon Mar 21 00:05:43 2016
    </td>
    <td align="right" class="footer">
      <a target="mainFrame" href="http://epydoc.sourceforge.net"
        >http://epydoc.sourceforge.net</a>
    </td>
  </tr>
</table>

<script type="text/javascript">
  <!--
  // Private objects are initially displayed (because if
  // javascript is turned off then we want them to be
  // visible); but by default, we want to hide them.  So hide
  // them unless we have a cookie that says to show them.
  checkCookie();
  // -->
</script>
</body>
</html>
