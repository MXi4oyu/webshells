<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>pyparsing.OnlyOnce</title>
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
        Class&nbsp;OnlyOnce
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="pyparsing.OnlyOnce-class.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class OnlyOnce</h1><p class="nomargin-top"><span class="codelink"><a href="pyparsing-pysrc.html#OnlyOnce">source&nbsp;code</a></span></p>
<pre class="base-tree">
object --+
         |
        <strong class="uidshort">OnlyOnce</strong>
</pre>

<hr />
<p>Wrapper for parse actions, to ensure they are only called once.</p>

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
          <td><span class="summary-sig"><a href="pyparsing.OnlyOnce-class.html#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">methodCall</span>)</span><br />
      x.__init__(...) initializes x; see help(type(x)) for signature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#OnlyOnce.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__call__"></a><span class="summary-sig-name">__call__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">s</span>,
        <span class="summary-sig-arg">l</span>,
        <span class="summary-sig-arg">t</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#OnlyOnce.__call__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="reset"></a><span class="summary-sig-name">reset</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#OnlyOnce.reset">source&nbsp;code</a></span>
            
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
      <code>__hash__</code>,
      <code>__new__</code>,
      <code>__reduce__</code>,
      <code>__reduce_ex__</code>,
      <code>__repr__</code>,
      <code>__setattr__</code>,
      <code>__sizeof__</code>,
      <code>__str__</code>,
      <code>__subclasshook__</code>
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
        <span class="sig-arg">methodCall</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#OnlyOnce.__init__">source&nbsp;code</a></span>&nbsp;
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
