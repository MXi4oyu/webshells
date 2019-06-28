<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>pyparsing.ParserElement</title>
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
        Class&nbsp;ParserElement
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="pyparsing.ParserElement-class.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class ParserElement</h1><p class="nomargin-top"><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement">source&nbsp;code</a></span></p>
<pre class="base-tree">
object --+
         |
        <strong class="uidshort">ParserElement</strong>
</pre>

<dl><dt>Known Subclasses:</dt>
<dd>
      <ul class="subclass-list">
<li><a href="pyparsing.Token-class.html">Token</a></li><li>, <a href="pyparsing.ParseExpression-class.html">ParseExpression</a></li><li>, <a href="pyparsing.ParseElementEnhance-class.html">ParseElementEnhance</a></li>  </ul>
</dd></dl>

<hr />
<p>Abstract base level parser element class.</p>

<!-- ==================== NESTED CLASSES ==================== -->
<a name="section-NestedClasses"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Nested Classes</span></td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Literal-class.html" class="summary-name">literalStringClass</a><br />
      Token to exactly match a specified string.
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">savelist</span>=<span class="summary-sig-default">False</span>)</span><br />
      x.__init__(...) initializes x; see help(type(x)) for signature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#copy" class="summary-sig-name">copy</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Make a copy of this <code>ParserElement</code>.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.copy">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="setName"></a><span class="summary-sig-name">setName</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">name</span>)</span><br />
      Define name for this expression, for use in debugging.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setName">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#setResultsName" class="summary-sig-name">setResultsName</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">name</span>,
        <span class="summary-sig-arg">listAllMatches</span>=<span class="summary-sig-default">False</span>)</span><br />
      Define name for referencing matching tokens as a nested attribute of 
      the returned parse results.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setResultsName">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#setBreak" class="summary-sig-name">setBreak</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">breakFlag</span>=<span class="summary-sig-default">True</span>)</span><br />
      Method to invoke the Python pdb debugger when this element is about 
      to be parsed.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setBreak">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#setParseAction" class="summary-sig-name">setParseAction</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">*fns</span>,
        <span class="summary-sig-arg">**kwargs</span>)</span><br />
      Define action to perform when successfully matching parse element 
      definition.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setParseAction">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#addParseAction" class="summary-sig-name">addParseAction</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">*fns</span>,
        <span class="summary-sig-arg">**kwargs</span>)</span><br />
      Add parse action to expression's list of parse actions.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.addParseAction">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#addCondition" class="summary-sig-name">addCondition</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">*fns</span>,
        <span class="summary-sig-arg">**kwargs</span>)</span><br />
      Add a boolean predicate function to expression's list of parse 
      actions.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.addCondition">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#setFailAction" class="summary-sig-name">setFailAction</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">fn</span>)</span><br />
      Define action to perform if parsing fails at this expression.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setFailAction">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="preParse"></a><span class="summary-sig-name">preParse</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">loc</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.preParse">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="parseImpl"></a><span class="summary-sig-name">parseImpl</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">loc</span>,
        <span class="summary-sig-arg">doActions</span>=<span class="summary-sig-default">True</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseImpl">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="postParse"></a><span class="summary-sig-name">postParse</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">loc</span>,
        <span class="summary-sig-arg">tokenlist</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.postParse">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="tryParse"></a><span class="summary-sig-name">tryParse</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">loc</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.tryParse">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="canParseNext"></a><span class="summary-sig-name">canParseNext</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">loc</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.canParseNext">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#parseString" class="summary-sig-name">parseString</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">parseAll</span>=<span class="summary-sig-default">False</span>)</span><br />
      Execute the parse expression with the given string.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseString">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#scanString" class="summary-sig-name">scanString</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">maxMatches</span>=<span class="summary-sig-default">2147483647</span>,
        <span class="summary-sig-arg">overlap</span>=<span class="summary-sig-default">False</span>)</span><br />
      Scan the input string for expression matches.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.scanString">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#transformString" class="summary-sig-name">transformString</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>)</span><br />
      Extension to <code><a 
      href="pyparsing.ParserElement-class.html#scanString" 
      class="link">scanString</a></code>, to modify matching text with 
      modified tokens that may be returned from a parse action.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.transformString">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#searchString" class="summary-sig-name">searchString</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">instring</span>,
        <span class="summary-sig-arg">maxMatches</span>=<span class="summary-sig-default">2147483647</span>)</span><br />
      Another extension to <code><a 
      href="pyparsing.ParserElement-class.html#scanString" 
      class="link">scanString</a></code>, simplifying the access to the 
      tokens found to match the given parse expression.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.searchString">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__add__"></a><span class="summary-sig-name">__add__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of + operator - returns <code><a 
      href="pyparsing.And-class.html" class="link">And</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__add__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__radd__"></a><span class="summary-sig-name">__radd__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of + operator when left operand is not a <code><a 
      href="pyparsing.ParserElement-class.html" 
      class="link">ParserElement</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__radd__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__sub__"></a><span class="summary-sig-name">__sub__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of - operator, returns <code><a 
      href="pyparsing.And-class.html" class="link">And</a></code> with 
      error stop</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__sub__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__rsub__"></a><span class="summary-sig-name">__rsub__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of - operator when left operand is not a <code><a 
      href="pyparsing.ParserElement-class.html" 
      class="link">ParserElement</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__rsub__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#__mul__" class="summary-sig-name">__mul__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of * operator, allows use of <code>expr * 3</code> in 
      place of <code>expr + expr + expr</code>.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__mul__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__rmul__"></a><span class="summary-sig-name">__rmul__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__rmul__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__or__"></a><span class="summary-sig-name">__or__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of | operator - returns <code><a 
      href="pyparsing.MatchFirst-class.html" 
      class="link">MatchFirst</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__or__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__ror__"></a><span class="summary-sig-name">__ror__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of | operator when left operand is not a <code><a 
      href="pyparsing.ParserElement-class.html" 
      class="link">ParserElement</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__ror__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__xor__"></a><span class="summary-sig-name">__xor__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of ^ operator - returns <code><a 
      href="pyparsing.Or-class.html" class="link">Or</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__xor__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__rxor__"></a><span class="summary-sig-name">__rxor__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of ^ operator when left operand is not a <code><a 
      href="pyparsing.ParserElement-class.html" 
      class="link">ParserElement</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__rxor__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__and__"></a><span class="summary-sig-name">__and__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of &amp; operator - returns <code><a 
      href="pyparsing.Each-class.html" class="link">Each</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__and__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__rand__"></a><span class="summary-sig-name">__rand__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Implementation of &amp; operator when left operand is not a <code><a 
      href="pyparsing.ParserElement-class.html" 
      class="link">ParserElement</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__rand__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__invert__"></a><span class="summary-sig-name">__invert__</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Implementation of ~ operator - returns <code><a 
      href="pyparsing.NotAny-class.html" class="link">NotAny</a></code></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__invert__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#__call__" class="summary-sig-name">__call__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">name</span>=<span class="summary-sig-default">None</span>)</span><br />
      Shortcut for <code><a 
      href="pyparsing.ParserElement-class.html#setResultsName" 
      class="link">setResultsName</a></code>, with 
      <code>listAllMatches=default</code>:</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__call__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="suppress"></a><span class="summary-sig-name">suppress</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Suppresses the output of this <code>ParserElement</code>; useful to 
      keep punctuation from cluttering up returned output.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.suppress">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#leaveWhitespace" class="summary-sig-name">leaveWhitespace</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Disables the skipping of whitespace before matching the characters in
      the <code>ParserElement</code>'s defined pattern.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.leaveWhitespace">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="setWhitespaceChars"></a><span class="summary-sig-name">setWhitespaceChars</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">chars</span>)</span><br />
      Overrides the default whitespace chars</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setWhitespaceChars">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#parseWithTabs" class="summary-sig-name">parseWithTabs</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Overrides default behavior to expand <code>&lt;TAB&gt;</code>s to 
      spaces before parsing the input string.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseWithTabs">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="ignore"></a><span class="summary-sig-name">ignore</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span><br />
      Define expression to be ignored (e.g., comments) while doing pattern 
      matching; may be called repeatedly, to define multiple comment or 
      other ignorable patterns.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.ignore">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="setDebugActions"></a><span class="summary-sig-name">setDebugActions</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">startAction</span>,
        <span class="summary-sig-arg">successAction</span>,
        <span class="summary-sig-arg">exceptionAction</span>)</span><br />
      Enable display of debugging messages while doing pattern matching.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setDebugActions">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#setDebug" class="summary-sig-name">setDebug</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">flag</span>=<span class="summary-sig-default">True</span>)</span><br />
      Enable display of debugging messages while doing pattern matching.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setDebug">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#__str__" class="summary-sig-name">__str__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      str(x)</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__str__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#__repr__" class="summary-sig-name">__repr__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      repr(x)</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__repr__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="streamline"></a><span class="summary-sig-name">streamline</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.streamline">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="checkRecursion"></a><span class="summary-sig-name">checkRecursion</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">parseElementList</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.checkRecursion">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="validate"></a><span class="summary-sig-name">validate</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">validateTrace</span>=<span class="summary-sig-default"><code class="variable-group">[</code><code class="variable-group">]</code></span>)</span><br />
      Check defined expressions for valid structure, check for infinite 
      recursive definitions.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.validate">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#parseFile" class="summary-sig-name">parseFile</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">file_or_filename</span>,
        <span class="summary-sig-arg">parseAll</span>=<span class="summary-sig-default">False</span>)</span><br />
      Execute the parse expression on the given file or filename.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseFile">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__eq__"></a><span class="summary-sig-name">__eq__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__eq__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__ne__"></a><span class="summary-sig-name">__ne__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__ne__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#__hash__" class="summary-sig-name">__hash__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      hash(x)</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__hash__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__req__"></a><span class="summary-sig-name">__req__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__req__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__rne__"></a><span class="summary-sig-name">__rne__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__rne__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#runTests" class="summary-sig-name">runTests</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">tests</span>,
        <span class="summary-sig-arg">parseAll</span>=<span class="summary-sig-default">False</span>)</span><br />
      Execute the parse expression on a series of test strings, showing 
      each test, the parsed results or where the parse failed.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.runTests">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
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
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a name="setDefaultWhitespaceChars"></a><span class="summary-sig-name">setDefaultWhitespaceChars</span>(<span class="summary-sig-arg">chars</span>)</span><br />
      Overrides the default whitespace chars</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setDefaultWhitespaceChars">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="inlineLiteralsUsing"></a><span class="summary-sig-name">inlineLiteralsUsing</span>(<span class="summary-sig-arg">cls</span>)</span><br />
      Set class to be used for inclusion of string literals into a parser.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.inlineLiteralsUsing">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="resetCache"></a><span class="summary-sig-name">resetCache</span>()</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.resetCache">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParserElement-class.html#enablePackrat" class="summary-sig-name">enablePackrat</a>()</span><br />
      Enables &quot;packrat&quot; parsing, which adds memoizing to the 
      parsing logic.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.enablePackrat">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
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
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="DEFAULT_WHITE_CHARS"></a><span class="summary-name">DEFAULT_WHITE_CHARS</span> = <code title="''' 
\t\r'''"><code class="variable-quote">'</code><code class="variable-string"> \n\t\r</code><code class="variable-quote">'</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="verbose_stacktrace"></a><span class="summary-name">verbose_stacktrace</span> = <code title="False">False</code>
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
        <span class="sig-arg">savelist</span>=<span class="sig-default">False</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__init__">source&nbsp;code</a></span>&nbsp;
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
<a name="copy"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">copy</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.copy">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Make a copy of this <code>ParserElement</code>.  Useful for defining 
  different parse actions for the same parsing pattern, using copies of the
  original parse element.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="setResultsName"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setResultsName</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">name</span>,
        <span class="sig-arg">listAllMatches</span>=<span class="sig-default">False</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setResultsName">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Define name for referencing matching tokens as a nested attribute of 
  the returned parse results. NOTE: this returns a *copy* of the original 
  <code>ParserElement</code> object; this is so that the client can define 
  a basic element, such as an integer, and reference it in multiple places 
  with different names.</p>
  <p>You can also set results names using the abbreviated syntax, 
  <code>expr(&quot;name&quot;)</code> in place of 
  <code>expr.setResultsName(&quot;name&quot;)</code> - see <a 
  href="pyparsing.ParserElement-class.html#__call__" 
  class="link"><i>__call__</i></a>.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="setBreak"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setBreak</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">breakFlag</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setBreak">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Method to invoke the Python pdb debugger when this element is about to
  be parsed. Set <code>breakFlag</code> to True to enable, False to 
  disable.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="setParseAction"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setParseAction</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">*fns</span>,
        <span class="sig-arg">**kwargs</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setParseAction">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Define action to perform when successfully matching parse element 
  definition. Parse action fn is a callable method with 0-3 arguments, 
  called as <code>fn(s,loc,toks)</code>, <code>fn(loc,toks)</code>, 
  <code>fn(toks)</code>, or just <code>fn()</code>, where:</p>
  <ul>
    <li>
      s   = the original string being parsed (see note below)
    </li>
    <li>
      loc = the location of the matching substring
    </li>
    <li>
      toks = a list of the matched tokens, packaged as a <code><a 
      href="pyparsing.ParseResults-class.html" 
      class="link">ParseResults</a></code> object
    </li>
  </ul>
  <p>If the functions in fns modify the tokens, they can return them as the
  return value from fn, and the modified list of tokens will replace the 
  original. Otherwise, fn does not need to return any value.</p>
  <p>Note: the default parsing behavior is to expand tabs in the input 
  string before starting the parsing process.  See <a 
  href="pyparsing.ParserElement-class.html#parseString" 
  class="link"><i>parseString</i></a> for more information on parsing 
  strings containing <code>&lt;TAB&gt;</code>s, and suggested methods to 
  maintain a consistent view of the parsed string, the parse location, and 
  line and column positions within the parsed string.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="addParseAction"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">addParseAction</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">*fns</span>,
        <span class="sig-arg">**kwargs</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.addParseAction">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Add parse action to expression's list of parse actions. See <a 
  href="pyparsing.ParserElement-class.html#setParseAction" 
  class="link"><i>setParseAction</i></a>.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="addCondition"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">addCondition</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">*fns</span>,
        <span class="sig-arg">**kwargs</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.addCondition">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Add a boolean predicate function to expression's list of parse 
  actions. See <a href="pyparsing.ParserElement-class.html#setParseAction" 
  class="link"><i>setParseAction</i></a>. Optional keyword argument 
  <code>message</code> can be used to define a custom message to be used in
  the raised exception.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="setFailAction"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setFailAction</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">fn</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setFailAction">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Define action to perform if parsing fails at this expression. Fail 
  acton fn is a callable function that takes the arguments 
  <code>fn(s,loc,expr,err)</code> where:</p>
  <ul>
    <li>
      s = string being parsed
    </li>
    <li>
      loc = location where expression match was attempted and failed
    </li>
    <li>
      expr = the parse expression that failed
    </li>
    <li>
      err = the exception thrown
    </li>
  </ul>
  <p>The function returns no value.  It may throw <code><a 
  href="pyparsing.ParseFatalException-class.html" 
  class="link">ParseFatalException</a></code> if it is desired to stop 
  parsing immediately.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="enablePackrat"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">enablePackrat</span>()</span>
    <br /><em class="fname">Static Method</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.enablePackrat">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Enables &quot;packrat&quot; parsing, which adds memoizing to the 
  parsing logic. Repeated parse attempts at the same string location (which
  happens often in many complex grammars) can immediately return a cached 
  value, instead of re-executing parsing/validating code.  Memoizing is 
  done of both valid results and parsing exceptions.</p>
  <p>This speedup may break existing programs that use parse actions that 
  have side-effects.  For this reason, packrat parsing is disabled when you
  first import pyparsing.  To activate the packrat feature, your program 
  must call the class method <code>ParserElement.enablePackrat()</code>.  
  If your program uses <code>psyco</code> to &quot;compile as you go&quot;,
  you must call <code>enablePackrat</code> before calling 
  <code>psyco.full()</code>.  If you do not do this, Python will crash.  
  For best results, call <code>enablePackrat()</code> immediately after 
  importing pyparsing.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="parseString"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">parseString</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">instring</span>,
        <span class="sig-arg">parseAll</span>=<span class="sig-default">False</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseString">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Execute the parse expression with the given string. This is the main 
  interface to the client code, once the complete expression has been 
  built.</p>
  <p>If you want the grammar to require that the entire input string be 
  successfully parsed, then set <code>parseAll</code> to True (equivalent 
  to ending the grammar with <code><a href="pyparsing.StringEnd-class.html"
  class="link">StringEnd()</a></code>).</p>
  <p>Note: <code>parseString</code> implicitly calls 
  <code>expandtabs()</code> on the input string, in order to report proper 
  column numbers in parse actions. If the input string contains tabs and 
  the grammar uses parse actions that use the <code>loc</code> argument to 
  index into the string being parsed, you can ensure you have a consistent 
  view of the input string by:</p>
  <ul>
    <li>
      calling <code>parseWithTabs</code> on your grammar before calling 
      <code>parseString</code> (see <a 
      href="pyparsing.ParserElement-class.html#parseWithTabs" 
      class="link"><i>parseWithTabs</i></a>)
    </li>
    <li>
      define your parse action using the full <code>(s,loc,toks)</code> 
      signature, and reference the input string using the parse action's 
      <code>s</code> argument
    </li>
    <li>
      explictly expand the tabs in your input string before calling 
      <code>parseString</code>
    </li>
  </ul>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="scanString"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">scanString</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">instring</span>,
        <span class="sig-arg">maxMatches</span>=<span class="sig-default">2147483647</span>,
        <span class="sig-arg">overlap</span>=<span class="sig-default">False</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.scanString">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Scan the input string for expression matches.  Each match will return 
  the matching tokens, start location, and end location.  May be called 
  with optional <code>maxMatches</code> argument, to clip scanning after 
  'n' matches are found.  If <code>overlap</code> is specified, then 
  overlapping matches will be reported.</p>
  <p>Note that the start and end locations are reported relative to the 
  string being parsed.  See <a 
  href="pyparsing.ParserElement-class.html#parseString" 
  class="link"><i>parseString</i></a> for more information on parsing 
  strings with embedded tabs.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="transformString"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">transformString</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">instring</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.transformString">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Extension to <code><a 
  href="pyparsing.ParserElement-class.html#scanString" 
  class="link">scanString</a></code>, to modify matching text with modified
  tokens that may be returned from a parse action.  To use 
  <code>transformString</code>, define a grammar and attach a parse action 
  to it that modifies the returned token list. Invoking 
  <code>transformString()</code> on a target string will then scan for 
  matches, and replace the matched text patterns according to the logic in 
  the parse action.  <code>transformString()</code> returns the resulting 
  transformed string.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="searchString"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">searchString</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">instring</span>,
        <span class="sig-arg">maxMatches</span>=<span class="sig-default">2147483647</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.searchString">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Another extension to <code><a 
  href="pyparsing.ParserElement-class.html#scanString" 
  class="link">scanString</a></code>, simplifying the access to the tokens 
  found to match the given parse expression.  May be called with optional 
  <code>maxMatches</code> argument, to clip searching after 'n' matches are
  found.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="__mul__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__mul__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">other</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__mul__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Implementation of * operator, allows use of <code>expr * 3</code> in 
  place of <code>expr + expr + expr</code>.  Expressions may also me 
  multiplied by a 2-integer tuple, similar to <code>{min,max}</code> 
  multipliers in regular expressions.  Tuples may also include 
  <code>None</code> as in:</p>
  <ul>
    <li>
      <code>expr*(n,None)</code> or <code>expr*(n,)</code> is equivalent to
      <code>expr*n + <a href="pyparsing.ZeroOrMore-class.html" 
      class="link">ZeroOrMore</a>(expr)</code> (read as &quot;at least n 
      instances of <code>expr</code>&quot;)
    </li>
    <li>
      <code>expr*(None,n)</code> is equivalent to <code>expr*(0,n)</code> 
      (read as &quot;0 to n instances of <code>expr</code>&quot;)
    </li>
    <li>
      <code>expr*(None,None)</code> is equivalent to <code><a 
      href="pyparsing.ZeroOrMore-class.html" 
      class="link">ZeroOrMore</a>(expr)</code>
    </li>
    <li>
      <code>expr*(1,None)</code> is equivalent to <code><a 
      href="pyparsing.OneOrMore-class.html" 
      class="link">OneOrMore</a>(expr)</code>
    </li>
  </ul>
  <p>Note that <code>expr*(None,n)</code> does not raise an exception if 
  more than n exprs exist in the input stream; that is, 
  <code>expr*(None,n)</code> does not enforce a maximum number of expr 
  occurrences.  If this behavior is desired, then write <code>expr*(None,n)
  + ~expr</code></p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="__call__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__call__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">name</span>=<span class="sig-default">None</span>)</span>
    <br /><em class="fname">(Call operator)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__call__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Shortcut for <code><a 
  href="pyparsing.ParserElement-class.html#setResultsName" 
  class="link">setResultsName</a></code>, with 
  <code>listAllMatches=default</code>:</p>
<pre class="literalblock">
 userdata = Word(alphas).setResultsName(&quot;name&quot;) + Word(nums+&quot;-&quot;).setResultsName(&quot;socsecno&quot;)
</pre>
  <p>could be written as:</p>
<pre class="literalblock">
 userdata = Word(alphas)(&quot;name&quot;) + Word(nums+&quot;-&quot;)(&quot;socsecno&quot;)
</pre>
  <p>If <code>name</code> is given with a trailing <code>'*'</code> 
  character, then <code>listAllMatches</code> will be passed as 
  <code>True</code>.</p>
  <p>If <code>name</code> is omitted, same as calling <code><a 
  href="pyparsing.ParserElement-class.html#copy" 
  class="link">copy</a></code>.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="leaveWhitespace"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">leaveWhitespace</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.leaveWhitespace">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Disables the skipping of whitespace before matching the characters in 
  the <code>ParserElement</code>'s defined pattern.  This is normally only 
  used internally by the pyparsing module, but may be needed in some 
  whitespace-sensitive grammars.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="parseWithTabs"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">parseWithTabs</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseWithTabs">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Overrides default behavior to expand <code>&lt;TAB&gt;</code>s to 
  spaces before parsing the input string. Must be called before 
  <code>parseString</code> when the input grammar contains elements that 
  match <code>&lt;TAB&gt;</code> characters.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="setDebug"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setDebug</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">flag</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.setDebug">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Enable display of debugging messages while doing pattern matching. Set
  <code>flag</code> to True to enable, False to disable.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="__str__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__str__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Informal representation operator)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__str__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>str(x)</p>
  <dl class="fields">
    <dt>Overrides:
        object.__str__
        <dd><em class="note">(inherited documentation)</em></dd>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__repr__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__repr__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Representation operator)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__repr__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>repr(x)</p>
  <dl class="fields">
    <dt>Overrides:
        object.__repr__
        <dd><em class="note">(inherited documentation)</em></dd>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="parseFile"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">parseFile</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">file_or_filename</span>,
        <span class="sig-arg">parseAll</span>=<span class="sig-default">False</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.parseFile">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Execute the parse expression on the given file or filename. If a 
  filename is specified (instead of a file object), the entire file is 
  opened, read, and closed before parsing.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="__hash__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__hash__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Hashing function)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.__hash__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>hash(x)</p>
  <dl class="fields">
    <dt>Overrides:
        object.__hash__
        <dd><em class="note">(inherited documentation)</em></dd>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="runTests"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">runTests</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">tests</span>,
        <span class="sig-arg">parseAll</span>=<span class="sig-default">False</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParserElement.runTests">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Execute the parse expression on a series of test strings, showing each
  test, the parsed results or where the parse failed. Quick and easy way to
  run a parse expression against a list of sample strings.</p>
  <p>Parameters:</p>
  <ul>
    <li>
      tests - a list of separate test strings, or a multiline string of 
      test strings
    </li>
    <li>
      parseAll - (default=False) - flag to pass to <code><a 
      href="pyparsing.ParserElement-class.html#parseString" 
      class="link">parseString</a></code> when running tests
    </li>
  </ul>
  <dl class="fields">
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
    Generated by Epydoc 3.0.1 on Mon Mar 21 00:05:44 2016
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
