<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>pyparsing.ParseFatalException</title>
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
        Class&nbsp;ParseFatalException
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="pyparsing.ParseFatalException-class.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class ParseFatalException</h1><p class="nomargin-top"><span class="codelink"><a href="pyparsing-pysrc.html#ParseFatalException">source&nbsp;code</a></span></p>
<pre class="base-tree">
              object --+            
                       |            
exceptions.BaseException --+        
                           |        
        exceptions.Exception --+    
                               |    
              <a href="pyparsing.ParseBaseException-class.html">ParseBaseException</a> --+
                                   |
                                  <strong class="uidshort">ParseFatalException</strong>
</pre>

<dl><dt>Known Subclasses:</dt>
<dd>
      <ul class="subclass-list">
<li><a href="pyparsing.ParseSyntaxException-class.html">ParseSyntaxException</a></li>  </ul>
</dd></dl>

<hr />
<p>user-throwable exception thrown when inconsistent parse content is 
  found; stops all parsing immediately</p>

<!-- ==================== INSTANCE METHODS ==================== -->
<a name="section-InstanceMethods"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Instance Methods</span></td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="pyparsing.ParseBaseException-class.html">ParseBaseException</a></code></b>:
      <code><a href="pyparsing.ParseBaseException-class.html#__dir__">__dir__</a></code>,
      <code><a href="pyparsing.ParseBaseException-class.html#__getattr__">__getattr__</a></code>,
      <code><a href="pyparsing.ParseBaseException-class.html#__init__">__init__</a></code>,
      <code><a href="pyparsing.ParseBaseException-class.html#__repr__">__repr__</a></code>,
      <code><a href="pyparsing.ParseBaseException-class.html#__str__">__str__</a></code>,
      <code><a href="pyparsing.ParseBaseException-class.html#markInputline">markInputline</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>exceptions.Exception</code></b>:
      <code>__new__</code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>exceptions.BaseException</code></b>:
      <code>__delattr__</code>,
      <code>__getattribute__</code>,
      <code>__getitem__</code>,
      <code>__getslice__</code>,
      <code>__reduce__</code>,
      <code>__setattr__</code>,
      <code>__setstate__</code>,
      <code>__unicode__</code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__format__</code>,
      <code>__hash__</code>,
      <code>__reduce_ex__</code>,
      <code>__sizeof__</code>,
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
    <p class="indent-wrapped-lines"><b>Inherited from <code>exceptions.BaseException</code></b>:
      <code>args</code>,
      <code>message</code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__class__</code>
      </p>
    </td>
  </tr>
</table>
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
