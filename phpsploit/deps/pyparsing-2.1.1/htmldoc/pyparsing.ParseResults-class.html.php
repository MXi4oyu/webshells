<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>pyparsing.ParseResults</title>
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
        Class&nbsp;ParseResults
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="pyparsing.ParseResults-class.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class ParseResults</h1><p class="nomargin-top"><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults">source&nbsp;code</a></span></p>
<pre class="base-tree">
object --+
         |
        <strong class="uidshort">ParseResults</strong>
</pre>

<hr />
<p>Structured parse results, to provide multiple means of access to the 
  parsed data:</p>
  <ul>
    <li>
      as a list (<code>len(results)</code>)
    </li>
    <li>
      by list index (<code>results[0], results[1]</code>, etc.)
    </li>
    <li>
      by attribute (<code>results.&lt;resultsName&gt;</code>)
    </li>
  </ul>

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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">toklist</span>=<span class="summary-sig-default">None</span>,
        <span class="summary-sig-arg">name</span>=<span class="summary-sig-default">None</span>,
        <span class="summary-sig-arg">asList</span>=<span class="summary-sig-default">True</span>,
        <span class="summary-sig-arg">modal</span>=<span class="summary-sig-default">True</span>,
        <span class="summary-sig-arg">isinstance</span>=<span class="summary-sig-default">&lt;built-in function isinstance&gt;</span>)</span><br />
      x.__init__(...) initializes x; see help(type(x)) for signature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__getitem__"></a><span class="summary-sig-name">__getitem__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">i</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__getitem__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__setitem__"></a><span class="summary-sig-name">__setitem__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">k</span>,
        <span class="summary-sig-arg">v</span>,
        <span class="summary-sig-arg">isinstance</span>=<span class="summary-sig-default">&lt;built-in function isinstance&gt;</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__setitem__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__delitem__"></a><span class="summary-sig-name">__delitem__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">i</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__delitem__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__contains__"></a><span class="summary-sig-name">__contains__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">k</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__contains__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__len__"></a><span class="summary-sig-name">__len__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__len__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__bool__"></a><span class="summary-sig-name">__bool__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__bool__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__nonzero__"></a><span class="summary-sig-name">__nonzero__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__bool__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__iter__"></a><span class="summary-sig-name">__iter__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__iter__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__reversed__"></a><span class="summary-sig-name">__reversed__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__reversed__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="iterkeys"></a><span class="summary-sig-name">iterkeys</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns all named result keys.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.iterkeys">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="itervalues"></a><span class="summary-sig-name">itervalues</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns all named result values.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.itervalues">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="iteritems"></a><span class="summary-sig-name">iteritems</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.iteritems">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="keys"></a><span class="summary-sig-name">keys</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns all named result keys.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.keys">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="values"></a><span class="summary-sig-name">values</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns all named result values.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.values">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="items"></a><span class="summary-sig-name">items</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns all named result keys and values as a list of tuples.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.items">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="haskeys"></a><span class="summary-sig-name">haskeys</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Since keys() returns an iterator, this method is helpful in bypassing
      code that looks for the existence of any defined results names.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.haskeys">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#pop" class="summary-sig-name">pop</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">*args</span>,
        <span class="summary-sig-arg">**kwargs</span>)</span><br />
      Removes and returns item at specified index (default=last).</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.pop">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="get"></a><span class="summary-sig-name">get</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">key</span>,
        <span class="summary-sig-arg">defaultValue</span>=<span class="summary-sig-default">None</span>)</span><br />
      Returns named result matching the given key, or if there is no such 
      name, then returns the given <code>defaultValue</code> or 
      <code>None</code> if no <code>defaultValue</code> is specified.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.get">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="insert"></a><span class="summary-sig-name">insert</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">index</span>,
        <span class="summary-sig-arg">insStr</span>)</span><br />
      Inserts new element at location index in the list of parsed tokens.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.insert">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="append"></a><span class="summary-sig-name">append</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">item</span>)</span><br />
      Add single element to end of ParseResults list of elements.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.append">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="extend"></a><span class="summary-sig-name">extend</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">itemseq</span>)</span><br />
      Add sequence of elements to end of ParseResults list of elements.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.extend">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="clear"></a><span class="summary-sig-name">clear</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Clear all elements and results names.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.clear">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__getattr__"></a><span class="summary-sig-name">__getattr__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">name</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__getattr__">source&nbsp;code</a></span>
            
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
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__add__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__iadd__"></a><span class="summary-sig-name">__iadd__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__iadd__">source&nbsp;code</a></span>
            
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
        <span class="summary-sig-arg">other</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__radd__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#__repr__" class="summary-sig-name">__repr__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      repr(x)</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__repr__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#__str__" class="summary-sig-name">__str__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      str(x)</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__str__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="asList"></a><span class="summary-sig-name">asList</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns the parse results as a nested list of matching tokens, all 
      converted to strings.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.asList">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="asDict"></a><span class="summary-sig-name">asDict</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns the named parse results as a nested dictionary.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.asDict">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="copy"></a><span class="summary-sig-name">copy</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns a new copy of a <code>ParseResults</code> object.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.copy">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#asXML" class="summary-sig-name">asXML</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">doctag</span>=<span class="summary-sig-default">None</span>,
        <span class="summary-sig-arg">namedItemsOnly</span>=<span class="summary-sig-default">False</span>,
        <span class="summary-sig-arg">indent</span>=<span class="summary-sig-default"><code class="variable-quote">'</code><code class="variable-string"></code><code class="variable-quote">'</code></span>,
        <span class="summary-sig-arg">formatted</span>=<span class="summary-sig-default">True</span>)</span><br />
      Returns the parse results as XML.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.asXML">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="getName"></a><span class="summary-sig-name">getName</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns the results name for this token expression.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.getName">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#dump" class="summary-sig-name">dump</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">indent</span>=<span class="summary-sig-default"><code class="variable-quote">'</code><code class="variable-string"></code><code class="variable-quote">'</code></span>,
        <span class="summary-sig-arg">depth</span>=<span class="summary-sig-default">0</span>)</span><br />
      Diagnostic method for listing out the contents of a 
      <code>ParseResults</code>.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.dump">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#pprint" class="summary-sig-name">pprint</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">*args</span>,
        <span class="summary-sig-arg">**kwargs</span>)</span><br />
      Pretty-printer for parsed results as a list, using the 
      <code>pprint</code> module.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.pprint">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__getstate__"></a><span class="summary-sig-name">__getstate__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__getstate__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__setstate__"></a><span class="summary-sig-name">__setstate__</span>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">state</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__setstate__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__getnewargs__"></a><span class="summary-sig-name">__getnewargs__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__getnewargs__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__dir__"></a><span class="summary-sig-name">__dir__</span>(<span class="summary-sig-arg">self</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__dir__">source&nbsp;code</a></span>
            
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
      <span class="summary-type">a new object with type S, a subtype of T</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="pyparsing.ParseResults-class.html#__new__" class="summary-sig-name">__new__</a>(<span class="summary-sig-arg">cls</span>,
        <span class="summary-sig-arg">toklist</span>=<span class="summary-sig-default">None</span>,
        <span class="summary-sig-arg">name</span>=<span class="summary-sig-default">None</span>,
        <span class="summary-sig-arg">asList</span>=<span class="summary-sig-default">True</span>,
        <span class="summary-sig-arg">modal</span>=<span class="summary-sig-default">True</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__new__">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
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
<a name="__new__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__new__</span>(<span class="sig-arg">cls</span>,
        <span class="sig-arg">toklist</span>=<span class="sig-default">None</span>,
        <span class="sig-arg">name</span>=<span class="sig-default">None</span>,
        <span class="sig-arg">asList</span>=<span class="sig-default">True</span>,
        <span class="sig-arg">modal</span>=<span class="sig-default">True</span>)</span>
    <br /><em class="fname">Static Method</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__new__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  
  <dl class="fields">
    <dt>Returns: a new object with type S, a subtype of T</dt>
    <dt>Overrides:
        object.__new__
        <dd><em class="note">(inherited documentation)</em></dd>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__init__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">toklist</span>=<span class="sig-default">None</span>,
        <span class="sig-arg">name</span>=<span class="sig-default">None</span>,
        <span class="sig-arg">asList</span>=<span class="sig-default">True</span>,
        <span class="sig-arg">modal</span>=<span class="sig-default">True</span>,
        <span class="sig-arg">isinstance</span>=<span class="sig-default">&lt;built-in function isinstance&gt;</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__init__">source&nbsp;code</a></span>&nbsp;
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
<a name="pop"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">pop</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">*args</span>,
        <span class="sig-arg">**kwargs</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.pop">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Removes and returns item at specified index (default=last). Supports 
  both list and dict semantics for pop(). If passed no argument or an 
  integer argument, it will use list semantics and pop tokens from the list
  of parsed tokens. If passed a non-integer argument (most likely a 
  string), it will use dict semantics and pop the corresponding value from 
  any defined results names. A second default return value argument is 
  supported, just as in dict.pop().</p>
  <dl class="fields">
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
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__repr__">source&nbsp;code</a></span>&nbsp;
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
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.__str__">source&nbsp;code</a></span>&nbsp;
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
<a name="asXML"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">asXML</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">doctag</span>=<span class="sig-default">None</span>,
        <span class="sig-arg">namedItemsOnly</span>=<span class="sig-default">False</span>,
        <span class="sig-arg">indent</span>=<span class="sig-default"><code class="variable-quote">'</code><code class="variable-string"></code><code class="variable-quote">'</code></span>,
        <span class="sig-arg">formatted</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.asXML">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Returns the parse results as XML. Tags are created for tokens and 
  lists that have defined results names.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="dump"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">dump</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">indent</span>=<span class="sig-default"><code class="variable-quote">'</code><code class="variable-string"></code><code class="variable-quote">'</code></span>,
        <span class="sig-arg">depth</span>=<span class="sig-default">0</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.dump">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Diagnostic method for listing out the contents of a 
  <code>ParseResults</code>. Accepts an optional <code>indent</code> 
  argument so that this string can be embedded in a nested display of other
  data.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="pprint"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">pprint</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">*args</span>,
        <span class="sig-arg">**kwargs</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#ParseResults.pprint">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Pretty-printer for parsed results as a list, using the 
  <code>pprint</code> module. Accepts additional positional or keyword args
  as defined for the <code>pprint.pprint</code> method. (<a 
  href="http://docs.python.org/3/library/pprint.html#pprint.pprint" 
  target="_top">http://docs.python.org/3/library/pprint.html#pprint.pprint</a>)</p>
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
