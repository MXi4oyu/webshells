<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>pyparsing</title>
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
      <th bgcolor="#70b0f0" class="navbar-select"
          >&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</th>

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
        Module&nbsp;pyparsing
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="pyparsing-module.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== MODULE DESCRIPTION ==================== -->
<h1 class="epydoc">Module pyparsing</h1><p class="nomargin-top"><span class="codelink"><a href="pyparsing-pysrc.html">source&nbsp;code</a></span></p>
<p>pyparsing module - Classes and methods to define and execute parsing 
  grammars</p>
  <p>The pyparsing module is an alternative approach to creating and 
  executing simple grammars, vs. the traditional lex/yacc approach, or the 
  use of regular expressions.  With pyparsing, you don't need to learn a 
  new syntax for defining grammars or matching expressions - the parsing 
  module provides a library of classes that you use to construct the 
  grammar directly in Python.</p>
  <p>Here is a program to parse &quot;Hello, World!&quot; (or any greeting 
  of the form <code>&quot;&lt;salutation&gt;, 
  &lt;addressee&gt;!&quot;</code>):</p>
<pre class="literalblock">
   from pyparsing import Word, alphas

   # define grammar of a greeting
   greet = Word( alphas ) + &quot;,&quot; + Word( alphas ) + &quot;!&quot;

   hello = &quot;Hello, World!&quot;
   print (hello, &quot;-&gt;&quot;, greet.parseString( hello ))
</pre>
  <p>The program outputs the following:</p>
<pre class="literalblock">
   Hello, World! -&gt; ['Hello', ',', 'World', '!']
</pre>
  <p>The Python representation of the grammar is quite readable, owing to 
  the self-explanatory class names, and the use of '+', '|' and '^' 
  operators.</p>
  <p>The parsed results returned from <code>parseString()</code> can be 
  accessed as a nested list, a dictionary, or an object with named 
  attributes.</p>
  <p>The pyparsing module handles some of the problems that are typically 
  vexing when writing text parsers:</p>
  <ul>
    <li>
      extra or missing whitespace (the above program will also handle 
      &quot;Hello,World!&quot;, &quot;Hello  ,  World  !&quot;, etc.)
    </li>
    <li>
      quoted strings
    </li>
    <li>
      embedded comments
    </li>
  </ul>

<hr />
<div class="fields">      <p><strong>Version:</strong>
        2.1.1
      </p>
      <p><strong>Author:</strong>
        Paul McGuire &lt;ptmcg@users.sourceforge.net&gt;
      </p>
</div><!-- ==================== CLASSES ==================== -->
<a name="section-Classes"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Classes</span></td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseBaseException-class.html" class="summary-name">ParseBaseException</a><br />
      base exception class for all parsing runtime exceptions
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseException-class.html" class="summary-name">ParseException</a><br />
      exception thrown when parse expressions don't match class; 
        supported attributes by name are:
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseFatalException-class.html" class="summary-name">ParseFatalException</a><br />
      user-throwable exception thrown when inconsistent parse content is 
        found; stops all parsing immediately
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseSyntaxException-class.html" class="summary-name">ParseSyntaxException</a><br />
      just like <code><a href="pyparsing.ParseFatalException-class.html" 
        class="link">ParseFatalException</a></code>, but thrown internally 
        when an <code>ErrorStop</code> ('-' operator) indicates that 
        parsing is to stop immediately because an unbacktrackable syntax 
        error has been found
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.RecursiveGrammarException-class.html" class="summary-name">RecursiveGrammarException</a><br />
      exception thrown by <code>validate()</code> if the grammar could be
        improperly recursive
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseResults-class.html" class="summary-name">ParseResults</a><br />
      Structured parse results, to provide multiple means of access to 
        the parsed data:
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParserElement-class.html" class="summary-name">ParserElement</a><br />
      Abstract base level parser element class.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Token-class.html" class="summary-name">Token</a><br />
      Abstract <code>ParserElement</code> subclass, for defining atomic 
        matching patterns.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Empty-class.html" class="summary-name">Empty</a><br />
      An empty token, will always match.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.NoMatch-class.html" class="summary-name">NoMatch</a><br />
      A token that will never match.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Literal-class.html" class="summary-name">Literal</a><br />
      Token to exactly match a specified string.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Keyword-class.html" class="summary-name">Keyword</a><br />
      Token to exactly match a specified string as a keyword, that is, it
        must be immediately followed by a non-keyword character.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.CaselessLiteral-class.html" class="summary-name">CaselessLiteral</a><br />
      Token to match a specified string, ignoring case of letters.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.CaselessKeyword-class.html" class="summary-name">CaselessKeyword</a>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Word-class.html" class="summary-name">Word</a><br />
      Token for matching words composed of allowed character sets.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Regex-class.html" class="summary-name">Regex</a><br />
      Token for matching strings that match a given regular expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.QuotedString-class.html" class="summary-name">QuotedString</a><br />
      Token for matching strings that are delimited by quoting 
        characters.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.CharsNotIn-class.html" class="summary-name">CharsNotIn</a><br />
      Token for matching words composed of characters *not* in a given 
        set.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.White-class.html" class="summary-name">White</a><br />
      Special matching class for matching whitespace.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.GoToColumn-class.html" class="summary-name">GoToColumn</a><br />
      Token to advance to a specific column of input text; useful for 
        tabular report scraping.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.LineStart-class.html" class="summary-name">LineStart</a><br />
      Matches if current position is at the beginning of a line within 
        the parse string
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.LineEnd-class.html" class="summary-name">LineEnd</a><br />
      Matches if current position is at the end of a line within the 
        parse string
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.StringStart-class.html" class="summary-name">StringStart</a><br />
      Matches if current position is at the beginning of the parse string
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.StringEnd-class.html" class="summary-name">StringEnd</a><br />
      Matches if current position is at the end of the parse string
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.WordStart-class.html" class="summary-name">WordStart</a><br />
      Matches if the current position is at the beginning of a Word, and 
        is not preceded by any character in a given set of 
        <code>wordChars</code> (default=<code>printables</code>).
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.WordEnd-class.html" class="summary-name">WordEnd</a><br />
      Matches if the current position is at the end of a Word, and is not
        followed by any character in a given set of <code>wordChars</code> 
        (default=<code>printables</code>).
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseExpression-class.html" class="summary-name">ParseExpression</a><br />
      Abstract subclass of ParserElement, for combining and 
        post-processing parsed tokens.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.And-class.html" class="summary-name">And</a><br />
      Requires all given <code>ParseExpression</code>s to be found in the
        given order.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Or-class.html" class="summary-name">Or</a><br />
      Requires that at least one <code>ParseExpression</code> is found.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.MatchFirst-class.html" class="summary-name">MatchFirst</a><br />
      Requires that at least one <code>ParseExpression</code> is found.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Each-class.html" class="summary-name">Each</a><br />
      Requires all given <code>ParseExpression</code>s to be found, but 
        in any order.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ParseElementEnhance-class.html" class="summary-name">ParseElementEnhance</a><br />
      Abstract subclass of <code>ParserElement</code>, for combining and 
        post-processing parsed tokens.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.FollowedBy-class.html" class="summary-name">FollowedBy</a><br />
      Lookahead matching of the given parse expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.NotAny-class.html" class="summary-name">NotAny</a><br />
      Lookahead to disallow matching with the given parse expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.OneOrMore-class.html" class="summary-name">OneOrMore</a><br />
      Repetition of one or more of the given expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.ZeroOrMore-class.html" class="summary-name">ZeroOrMore</a><br />
      Optional repetition of zero or more of the given expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Optional-class.html" class="summary-name">Optional</a><br />
      Optional matching of the given expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.SkipTo-class.html" class="summary-name">SkipTo</a><br />
      Token for skipping over all undefined text until the matched 
        expression is found.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Forward-class.html" class="summary-name">Forward</a><br />
      Forward declaration of an expression to be defined later - used for
        recursive grammars, such as algebraic infix notation.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.TokenConverter-class.html" class="summary-name">TokenConverter</a><br />
      Abstract subclass of <code>ParseExpression</code>, for converting 
        parsed results.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Combine-class.html" class="summary-name">Combine</a><br />
      Converter to concatenate all matching tokens to a single string.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Group-class.html" class="summary-name">Group</a><br />
      Converter to return the matched tokens as a list - useful for 
        returning tokens of <code><a href="pyparsing.ZeroOrMore-class.html"
        class="link">ZeroOrMore</a></code> and <code><a 
        href="pyparsing.OneOrMore-class.html" 
        class="link">OneOrMore</a></code> expressions.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Dict-class.html" class="summary-name">Dict</a><br />
      Converter to return a repetitive expression as a list, but also as 
        a dictionary.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.Suppress-class.html" class="summary-name">Suppress</a><br />
      Converter for ignoring the results of a parsed expression.
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing.OnlyOnce-class.html" class="summary-name">OnlyOnce</a><br />
      Wrapper for parse actions, to ensure they are only called once.
    </td>
  </tr>
</table>
<!-- ==================== FUNCTIONS ==================== -->
<a name="section-Functions"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Functions</span></td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="pyparsing-module.html#col" class="summary-sig-name">col</a>(<span class="summary-sig-arg">loc</span>,
        <span class="summary-sig-arg">strg</span>)</span><br />
      Returns current column within a string, counting newlines as line 
      separators.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#col">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#lineno" class="summary-sig-name">lineno</a>(<span class="summary-sig-arg">loc</span>,
        <span class="summary-sig-arg">strg</span>)</span><br />
      Returns current line number within a string, counting newlines as 
      line separators.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#lineno">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="line"></a><span class="summary-sig-name">line</span>(<span class="summary-sig-arg">loc</span>,
        <span class="summary-sig-arg">strg</span>)</span><br />
      Returns the line of text containing loc within a string, counting 
      newlines as line separators.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#line">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="nullDebugAction"></a><span class="summary-sig-name">nullDebugAction</span>(<span class="summary-sig-arg">*args</span>)</span><br />
      'Do-nothing' debug action, to suppress debugging output during 
      parsing.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#nullDebugAction">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="traceParseAction"></a><span class="summary-sig-name">traceParseAction</span>(<span class="summary-sig-arg">f</span>)</span><br />
      Decorator for debugging parse actions.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#traceParseAction">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#delimitedList" class="summary-sig-name">delimitedList</a>(<span class="summary-sig-arg">expr</span>,
        <span class="summary-sig-arg">delim</span>=<span class="summary-sig-default"><code class="variable-quote">'</code><code class="variable-string">,</code><code class="variable-quote">'</code></span>,
        <span class="summary-sig-arg">combine</span>=<span class="summary-sig-default">False</span>)</span><br />
      Helper to define a delimited list of expressions - the delimiter 
      defaults to ','.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#delimitedList">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#countedArray" class="summary-sig-name">countedArray</a>(<span class="summary-sig-arg">expr</span>,
        <span class="summary-sig-arg">intExpr</span>=<span class="summary-sig-default">None</span>)</span><br />
      Helper to define a counted list of expressions.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#countedArray">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#matchPreviousLiteral" class="summary-sig-name">matchPreviousLiteral</a>(<span class="summary-sig-arg">expr</span>)</span><br />
      Helper to define an expression that is indirectly defined from the 
      tokens matched in a previous expression, that is, it looks for a 
      'repeat' of a previous expression.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#matchPreviousLiteral">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#matchPreviousExpr" class="summary-sig-name">matchPreviousExpr</a>(<span class="summary-sig-arg">expr</span>)</span><br />
      Helper to define an expression that is indirectly defined from the 
      tokens matched in a previous expression, that is, it looks for a 
      'repeat' of a previous expression.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#matchPreviousExpr">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#oneOf" class="summary-sig-name">oneOf</a>(<span class="summary-sig-arg">strs</span>,
        <span class="summary-sig-arg">caseless</span>=<span class="summary-sig-default">False</span>,
        <span class="summary-sig-arg">useRegex</span>=<span class="summary-sig-default">True</span>)</span><br />
      Helper to quickly define a set of alternative Literals, and makes 
      sure to do longest-first testing when there is a conflict, regardless
      of the input order, but returns a <code><a 
      href="pyparsing.MatchFirst-class.html" 
      class="link">MatchFirst</a></code> for best performance.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#oneOf">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#dictOf" class="summary-sig-name">dictOf</a>(<span class="summary-sig-arg">key</span>,
        <span class="summary-sig-arg">value</span>)</span><br />
      Helper to easily and clearly define a dictionary by specifying the 
      respective patterns for the key and value.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#dictOf">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#originalTextFor" class="summary-sig-name">originalTextFor</a>(<span class="summary-sig-arg">expr</span>,
        <span class="summary-sig-arg">asString</span>=<span class="summary-sig-default">True</span>)</span><br />
      Helper to return the original, untokenized text for a given 
      expression.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#originalTextFor">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="ungroup"></a><span class="summary-sig-name">ungroup</span>(<span class="summary-sig-arg">expr</span>)</span><br />
      Helper to undo pyparsing's default grouping of And expressions, even 
      if all but one are non-empty.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#ungroup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#locatedExpr" class="summary-sig-name">locatedExpr</a>(<span class="summary-sig-arg">expr</span>)</span><br />
      Helper to decorate a returned token with its starting and ending 
      locations in the input string.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#locatedExpr">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#srange" class="summary-sig-name">srange</a>(<span class="summary-sig-arg">s</span>)</span><br />
      Helper to easily define string ranges for use in Word construction.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#srange">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="matchOnlyAtCol"></a><span class="summary-sig-name">matchOnlyAtCol</span>(<span class="summary-sig-arg">n</span>)</span><br />
      Helper method for defining parse actions that require matching at a 
      specific column in the input text.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#matchOnlyAtCol">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#replaceWith" class="summary-sig-name">replaceWith</a>(<span class="summary-sig-arg">replStr</span>)</span><br />
      Helper method for common parse actions that simply return a literal 
      value.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#replaceWith">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#removeQuotes" class="summary-sig-name">removeQuotes</a>(<span class="summary-sig-arg">s</span>,
        <span class="summary-sig-arg">l</span>,
        <span class="summary-sig-arg">t</span>)</span><br />
      Helper parse action for removing quotation marks from parsed quoted 
      strings.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#removeQuotes">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="upcaseTokens"></a><span class="summary-sig-name">upcaseTokens</span>(<span class="summary-sig-arg">s</span>,
        <span class="summary-sig-arg">l</span>,
        <span class="summary-sig-arg">t</span>)</span><br />
      Helper parse action to convert tokens to upper case.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#upcaseTokens">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="downcaseTokens"></a><span class="summary-sig-name">downcaseTokens</span>(<span class="summary-sig-arg">s</span>,
        <span class="summary-sig-arg">l</span>,
        <span class="summary-sig-arg">t</span>)</span><br />
      Helper parse action to convert tokens to lower case.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#downcaseTokens">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="makeHTMLTags"></a><span class="summary-sig-name">makeHTMLTags</span>(<span class="summary-sig-arg">tagStr</span>)</span><br />
      Helper to construct opening and closing tag expressions for HTML, 
      given a tag name</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#makeHTMLTags">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="makeXMLTags"></a><span class="summary-sig-name">makeXMLTags</span>(<span class="summary-sig-arg">tagStr</span>)</span><br />
      Helper to construct opening and closing tag expressions for XML, 
      given a tag name</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#makeXMLTags">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#withAttribute" class="summary-sig-name">withAttribute</a>(<span class="summary-sig-arg">*args</span>,
        <span class="summary-sig-arg">**attrDict</span>)</span><br />
      Helper to create a validating parse action to be used with start tags
      created with <code><a href="pyparsing-module.html#makeXMLTags" 
      class="link">makeXMLTags</a></code> or <code><a 
      href="pyparsing-module.html#makeHTMLTags" 
      class="link">makeHTMLTags</a></code>.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#withAttribute">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="withClass"></a><span class="summary-sig-name">withClass</span>(<span class="summary-sig-arg">classname</span>,
        <span class="summary-sig-arg">namespace</span>=<span class="summary-sig-default"><code class="variable-quote">'</code><code class="variable-string"></code><code class="variable-quote">'</code></span>)</span><br />
      Simplified version of <code><a 
      href="pyparsing-module.html#withAttribute" 
      class="link">withAttribute</a></code> when matching on a div class - 
      made difficult because <code>class</code> is a reserved word in 
      Python.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#withClass">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#infixNotation" class="summary-sig-name">infixNotation</a>(<span class="summary-sig-arg">baseExpr</span>,
        <span class="summary-sig-arg">opList</span>,
        <span class="summary-sig-arg">lpar</span>=<span class="summary-sig-default">Suppress:(&quot;(&quot;)</span>,
        <span class="summary-sig-arg">rpar</span>=<span class="summary-sig-default">Suppress:(&quot;)&quot;)</span>)</span><br />
      Helper method for constructing grammars of expressions made up of 
      operators working in a precedence hierarchy.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#infixNotation">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#operatorPrecedence" class="summary-sig-name">operatorPrecedence</a>(<span class="summary-sig-arg">baseExpr</span>,
        <span class="summary-sig-arg">opList</span>,
        <span class="summary-sig-arg">lpar</span>=<span class="summary-sig-default">Suppress:(&quot;(&quot;)</span>,
        <span class="summary-sig-arg">rpar</span>=<span class="summary-sig-default">Suppress:(&quot;)&quot;)</span>)</span><br />
      Helper method for constructing grammars of expressions made up of 
      operators working in a precedence hierarchy.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#infixNotation">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#nestedExpr" class="summary-sig-name">nestedExpr</a>(<span class="summary-sig-arg">opener</span>=<span class="summary-sig-default"><code class="variable-quote">'</code><code class="variable-string">(</code><code class="variable-quote">'</code></span>,
        <span class="summary-sig-arg">closer</span>=<span class="summary-sig-default"><code class="variable-quote">'</code><code class="variable-string">)</code><code class="variable-quote">'</code></span>,
        <span class="summary-sig-arg">content</span>=<span class="summary-sig-default">None</span>,
        <span class="summary-sig-arg">ignoreExpr</span>=<span class="summary-sig-default">quotedString using single or double quotes</span>)</span><br />
      Helper method for defining nested lists enclosed in opening and 
      closing delimiters (&quot;(&quot; and &quot;)&quot; are the default).</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#nestedExpr">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="pyparsing-module.html#indentedBlock" class="summary-sig-name">indentedBlock</a>(<span class="summary-sig-arg">blockStatementExpr</span>,
        <span class="summary-sig-arg">indentStack</span>,
        <span class="summary-sig-arg">indent</span>=<span class="summary-sig-default">True</span>)</span><br />
      Helper method for defining space-delimited indentation blocks, such 
      as those used to define block statements in Python source code.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#indentedBlock">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="replaceHTMLEntity"></a><span class="summary-sig-name">replaceHTMLEntity</span>(<span class="summary-sig-arg">t</span>)</span><br />
      Helper parser action to replace common HTML entities with their 
      special characters</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="pyparsing-pysrc.html#replaceHTMLEntity">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
</table>
<!-- ==================== VARIABLES ==================== -->
<a name="section-Variables"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Variables</span></td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="alphas"></a><span class="summary-name">alphas</span> = <code title="'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'"><code class="variable-quote">'</code><code class="variable-string">ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz</code><code class="variable-quote">'</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="nums"></a><span class="summary-name">nums</span> = <code title="'0123456789'"><code class="variable-quote">'</code><code class="variable-string">0123456789</code><code class="variable-quote">'</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="hexnums"></a><span class="summary-name">hexnums</span> = <code title="'0123456789ABCDEFabcdef'"><code class="variable-quote">'</code><code class="variable-string">0123456789ABCDEFabcdef</code><code class="variable-quote">'</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing-module.html#alphanums" class="summary-name">alphanums</a> = <code title="'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'"><code class="variable-quote">'</code><code class="variable-string">ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvw</code><code class="variable-ellipsis">...</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing-module.html#printables" class="summary-name">printables</a> = <code title="'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!&quot;#$%&amp;\\
'()*+,-./:;&lt;=&gt;?@[\\]^_`{|}~'"><code class="variable-quote">'</code><code class="variable-string">0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKL</code><code class="variable-ellipsis">...</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="empty"></a><span class="summary-name">empty</span> = <code title="empty">empty</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="lineStart"></a><span class="summary-name">lineStart</span> = <code title="lineStart">lineStart</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="lineEnd"></a><span class="summary-name">lineEnd</span> = <code title="lineEnd">lineEnd</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="stringStart"></a><span class="summary-name">stringStart</span> = <code title="stringStart">stringStart</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="stringEnd"></a><span class="summary-name">stringEnd</span> = <code title="stringEnd">stringEnd</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="opAssoc"></a><span class="summary-name">opAssoc</span> = <code title="_Constants()">_Constants()</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="dblQuotedString"></a><span class="summary-name">dblQuotedString</span> = <code title="string enclosed in double quotes">string enclosed in double quotes</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="sglQuotedString"></a><span class="summary-name">sglQuotedString</span> = <code title="string enclosed in single quotes">string enclosed in single quotes</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="quotedString"></a><span class="summary-name">quotedString</span> = <code title="quotedString using single or double quotes">quotedString using single or double quotes</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="unicodeString"></a><span class="summary-name">unicodeString</span> = <code title="unicode string literal">unicode string literal</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="pyparsing-module.html#alphas8bit" class="summary-name">alphas8bit</a> = <code title="u'&#192;&#193;&#194;&#195;&#196;&#197;&#198;&#199;&#200;&#201;&#202;&#203;&#204;&#205;&#206;&#207;&#208;&#209;&#210;&#211;&#212;&#213;&#214;&#216;&#217;&#218;&#219;&#220;&#221;&#222;&#223;&#224;&#225;&#226;&#227;&#228;&#229;&#230;&#231;&#232;&#233;&#234;&#235;&#236;&#237;&#238;&#239;&#240;&#241;&#242;&#243;&#244;&#245;&#246;&#248;&#249;&#250;&#251;&#252;&#253;&#254;&#255;'"><code class="variable-quote">u'</code><code class="variable-string">&#192;&#193;&#194;&#195;&#196;&#197;&#198;&#199;&#200;&#201;&#202;&#203;&#204;&#205;&#206;&#207;&#208;&#209;&#210;&#211;&#212;&#213;&#214;&#216;&#217;&#218;&#219;&#220;&#221;&#222;&#223;&#224;&#225;&#226;&#227;&#228;&#229;&#230;&#231;&#232;&#233;&#234;&#235;&#236;&#237;&#238;&#239;</code><code class="variable-ellipsis">...</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="punc8bit"></a><span class="summary-name">punc8bit</span> = <code title="u'&#161;&#162;&#163;&#164;&#165;&#166;&#167;&#168;&#169;&#170;&#171;&#172;&#173;&#174;&#175;&#176;&#177;&#178;&#179;&#180;&#181;&#182;&#183;&#184;&#185;&#186;&#187;&#188;&#189;&#190;&#191;&#215;&#247;'"><code class="variable-quote">u'</code><code class="variable-string">&#161;&#162;&#163;&#164;&#165;&#166;&#167;&#168;&#169;&#170;&#171;&#172;&#173;&#174;&#175;&#176;&#177;&#178;&#179;&#180;&#181;&#182;&#183;&#184;&#185;&#186;&#187;&#188;&#189;&#190;&#191;&#215;&#247;</code><code class="variable-quote">'</code></code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="commonHTMLEntity"></a><span class="summary-name">commonHTMLEntity</span> = <code title="common HTML entity">common HTML entity</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="cStyleComment"></a><span class="summary-name">cStyleComment</span> = <code title="C style comment">C style comment</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="htmlComment"></a><span class="summary-name">htmlComment</span> = <code title="HTML comment">HTML comment</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="restOfLine"></a><span class="summary-name">restOfLine</span> = <code title="rest of line">rest of line</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="dblSlashComment"></a><span class="summary-name">dblSlashComment</span> = <code title="// comment">// comment</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="cppStyleComment"></a><span class="summary-name">cppStyleComment</span> = <code title="C++ style comment">C++ style comment</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="javaStyleComment"></a><span class="summary-name">javaStyleComment</span> = <code title="C++ style comment">C++ style comment</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="pythonStyleComment"></a><span class="summary-name">pythonStyleComment</span> = <code title="Python style comment">Python style comment</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="commaSeparatedList"></a><span class="summary-name">commaSeparatedList</span> = <code title="commaSeparatedList">commaSeparatedList</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="anyCloseTag"></a><span class="summary-name">anyCloseTag</span> = <code title="&lt;/any tag&gt;">&lt;/any tag&gt;</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="anyOpenTag"></a><span class="summary-name">anyOpenTag</span> = <code title="&lt;any tag&gt;">&lt;any tag&gt;</code>
    </td>
  </tr>
</table>
<!-- ==================== FUNCTION DETAILS ==================== -->
<a name="section-FunctionDetails"></a>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Function Details</span></td>
</tr>
</table>
<a name="col"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">col</span>(<span class="sig-arg">loc</span>,
        <span class="sig-arg">strg</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#col">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Returns current column within a string, counting newlines as line 
  separators. The first column is number 1.</p>
  <p>Note: the default parsing behavior is to expand tabs in the input 
  string before starting the parsing process.  See <a 
  href="pyparsing.ParserElement-class.html#parseString" 
  class="link"><i>ParserElement.parseString</i></a> for more information on
  parsing strings containing <code>&lt;TAB&gt;</code>s, and suggested 
  methods to maintain a consistent view of the parsed string, the parse 
  location, and line and column positions within the parsed string.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="lineno"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">lineno</span>(<span class="sig-arg">loc</span>,
        <span class="sig-arg">strg</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#lineno">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Returns current line number within a string, counting newlines as line
  separators. The first line is number 1.</p>
  <p>Note: the default parsing behavior is to expand tabs in the input 
  string before starting the parsing process.  See <a 
  href="pyparsing.ParserElement-class.html#parseString" 
  class="link"><i>ParserElement.parseString</i></a> for more information on
  parsing strings containing <code>&lt;TAB&gt;</code>s, and suggested 
  methods to maintain a consistent view of the parsed string, the parse 
  location, and line and column positions within the parsed string.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="delimitedList"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">delimitedList</span>(<span class="sig-arg">expr</span>,
        <span class="sig-arg">delim</span>=<span class="sig-default"><code class="variable-quote">'</code><code class="variable-string">,</code><code class="variable-quote">'</code></span>,
        <span class="sig-arg">combine</span>=<span class="sig-default">False</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#delimitedList">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to define a delimited list of expressions - the delimiter 
  defaults to ','. By default, the list elements and delimiters can have 
  intervening whitespace, and comments, but this can be overridden by 
  passing <code>combine=True</code> in the constructor. If 
  <code>combine</code> is set to <code>True</code>, the matching tokens are
  returned as a single token string, with the delimiters included; 
  otherwise, the matching tokens are returned as a list of tokens, with the
  delimiters suppressed.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="countedArray"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">countedArray</span>(<span class="sig-arg">expr</span>,
        <span class="sig-arg">intExpr</span>=<span class="sig-default">None</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#countedArray">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to define a counted list of expressions. This helper defines a 
  pattern of the form:</p>
<pre class="literalblock">
   integer expr expr expr...
</pre>
  <p>where the leading integer tells how many expr expressions follow. The 
  matched tokens returns the array of expr tokens as a list - the leading 
  count token is suppressed.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="matchPreviousLiteral"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">matchPreviousLiteral</span>(<span class="sig-arg">expr</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#matchPreviousLiteral">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to define an expression that is indirectly defined from the 
  tokens matched in a previous expression, that is, it looks for a 'repeat'
  of a previous expression.  For example:</p>
<pre class="literalblock">
   first = Word(nums)
   second = matchPreviousLiteral(first)
   matchExpr = first + &quot;:&quot; + second
</pre>
  <p>will match <code>&quot;1:1&quot;</code>, but not 
  <code>&quot;1:2&quot;</code>.  Because this matches a previous literal, 
  will also match the leading <code>&quot;1:1&quot;</code> in 
  <code>&quot;1:10&quot;</code>. If this is not desired, use 
  <code>matchPreviousExpr</code>. Do *not* use with packrat parsing 
  enabled.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="matchPreviousExpr"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">matchPreviousExpr</span>(<span class="sig-arg">expr</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#matchPreviousExpr">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to define an expression that is indirectly defined from the 
  tokens matched in a previous expression, that is, it looks for a 'repeat'
  of a previous expression.  For example:</p>
<pre class="literalblock">
   first = Word(nums)
   second = matchPreviousExpr(first)
   matchExpr = first + &quot;:&quot; + second
</pre>
  <p>will match <code>&quot;1:1&quot;</code>, but not 
  <code>&quot;1:2&quot;</code>.  Because this matches by expressions, will 
  *not* match the leading <code>&quot;1:1&quot;</code> in 
  <code>&quot;1:10&quot;</code>; the expressions are evaluated first, and 
  then compared, so <code>&quot;1&quot;</code> is compared with 
  <code>&quot;10&quot;</code>. Do *not* use with packrat parsing 
  enabled.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="oneOf"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">oneOf</span>(<span class="sig-arg">strs</span>,
        <span class="sig-arg">caseless</span>=<span class="sig-default">False</span>,
        <span class="sig-arg">useRegex</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#oneOf">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to quickly define a set of alternative Literals, and makes sure
  to do longest-first testing when there is a conflict, regardless of the 
  input order, but returns a <code><a 
  href="pyparsing.MatchFirst-class.html" class="link">MatchFirst</a></code>
  for best performance.</p>
  <p>Parameters:</p>
  <ul>
    <li>
      strs - a string of space-delimited literals, or a list of string 
      literals
    </li>
    <li>
      caseless - (default=False) - treat all literals as caseless
    </li>
    <li>
      useRegex - (default=True) - as an optimization, will generate a Regex
      object; otherwise, will generate a <code>MatchFirst</code> object (if
      <code>caseless=True</code>, or if creating a <code>Regex</code> 
      raises an exception)
    </li>
  </ul>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="dictOf"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">dictOf</span>(<span class="sig-arg">key</span>,
        <span class="sig-arg">value</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#dictOf">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to easily and clearly define a dictionary by specifying the 
  respective patterns for the key and value.  Takes care of defining the 
  <code><a href="pyparsing.Dict-class.html" class="link">Dict</a></code>, 
  <code><a href="pyparsing.ZeroOrMore-class.html" 
  class="link">ZeroOrMore</a></code>, and <code><a 
  href="pyparsing.Group-class.html" class="link">Group</a></code> tokens in
  the proper order.  The key pattern can include delimiting markers or 
  punctuation, as long as they are suppressed, thereby leaving the 
  significant key text.  The value pattern can include named results, so 
  that the <code>Dict</code> results can include named token fields.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="originalTextFor"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">originalTextFor</span>(<span class="sig-arg">expr</span>,
        <span class="sig-arg">asString</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#originalTextFor">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to return the original, untokenized text for a given 
  expression.  Useful to restore the parsed fields of an HTML start tag 
  into the raw tag text itself, or to revert separate tokens with 
  intervening whitespace back to the original matching input text. By 
  default, returns astring containing the original parsed text.</p>
  <p>If the optional <code>asString</code> argument is passed as 
  <code>False</code>, then the return value is a <code><a 
  href="pyparsing.ParseResults-class.html" 
  class="link">ParseResults</a></code> containing any results names that 
  were originally matched, and a single token containing the original 
  matched text from the input string.  So if the expression passed to 
  <code><a href="pyparsing-module.html#originalTextFor" 
  class="link">originalTextFor</a></code> contains expressions with defined
  results names, you must set <code>asString</code> to <code>False</code> 
  if you want to preserve those results name values.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="locatedExpr"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">locatedExpr</span>(<span class="sig-arg">expr</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#locatedExpr">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to decorate a returned token with its starting and ending 
  locations in the input string. This helper adds the following results 
  names:</p>
  <ul>
    <li>
      locn_start = location where matched expression begins
    </li>
    <li>
      locn_end = location where matched expression ends
    </li>
    <li>
      value = the actual parsed results
    </li>
  </ul>
  <p>Be careful if the input text contains <code>&lt;TAB&gt;</code> 
  characters, you may want to call <code><a 
  href="pyparsing.ParserElement-class.html#parseWithTabs" 
  class="link">ParserElement.parseWithTabs</a></code></p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="srange"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">srange</span>(<span class="sig-arg">s</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#srange">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to easily define string ranges for use in Word construction.  
  Borrows syntax from regexp '[]' string range definitions:</p>
<pre class="literalblock">
  srange(&quot;[0-9]&quot;)   -&gt; &quot;0123456789&quot;
  srange(&quot;[a-z]&quot;)   -&gt; &quot;abcdefghijklmnopqrstuvwxyz&quot;
  srange(&quot;[a-z$_]&quot;) -&gt; &quot;abcdefghijklmnopqrstuvwxyz$_&quot;
</pre>
  <p>The input string must be enclosed in []'s, and the returned string is 
  the expanded character set joined into a single string. The values 
  enclosed in the []'s may be:</p>
<pre class="literalblock">
  a single character
  an escaped character with a leading backslash (such as \- or \])
  an escaped hex character with a leading '\x' (\x21, which is a '!' character) 
    (\0x## is also supported for backwards compatibility) 
  an escaped octal character with a leading '\0' (\041, which is a '!' character)
  a range of any of the above, separated by a dash ('a-z', etc.)
  any combination of the above ('aeiouy', 'a-zA-Z0-9_$', etc.)
</pre>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="replaceWith"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">replaceWith</span>(<span class="sig-arg">replStr</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#replaceWith">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper method for common parse actions that simply return a literal 
  value.  Especially useful when used with <code><a 
  href="pyparsing.ParserElement-class.html#transformString" 
  class="link">transformString</a>()</code>.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="removeQuotes"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">removeQuotes</span>(<span class="sig-arg">s</span>,
        <span class="sig-arg">l</span>,
        <span class="sig-arg">t</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#removeQuotes">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper parse action for removing quotation marks from parsed quoted 
  strings. To use, add this parse action to quoted string using:</p>
<pre class="literalblock">
 quotedString.setParseAction( removeQuotes )
</pre>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="withAttribute"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">withAttribute</span>(<span class="sig-arg">*args</span>,
        <span class="sig-arg">**attrDict</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#withAttribute">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper to create a validating parse action to be used with start tags 
  created with <code><a href="pyparsing-module.html#makeXMLTags" 
  class="link">makeXMLTags</a></code> or <code><a 
  href="pyparsing-module.html#makeHTMLTags" 
  class="link">makeHTMLTags</a></code>. Use <code>withAttribute</code> to 
  qualify a starting tag with a required attribute value, to avoid false 
  matches on common tags such as <code>&lt;TD&gt;</code> or 
  <code>&lt;DIV&gt;</code>.</p>
  <p>Call <code>withAttribute</code> with a series of attribute names and 
  values. Specify the list of filter attributes names and values as:</p>
  <ul>
    <li>
      keyword arguments, as in <code>(align=&quot;right&quot;)</code>, or
    </li>
    <li>
      as an explicit dict with <code>**</code> operator, when an attribute 
      name is also a Python reserved word, as in 
      <code>**{&quot;class&quot;:&quot;Customer&quot;, 
      &quot;align&quot;:&quot;right&quot;}</code>
    </li>
    <li>
      a list of name-value tuples, as in ( (&quot;ns1:class&quot;, 
      &quot;Customer&quot;), (&quot;ns2:align&quot;,&quot;right&quot;) )
    </li>
  </ul>
  <p>For attribute names with a namespace prefix, you must use the second 
  form.  Attribute names are matched insensitive to upper/lower case.</p>
  <p>If just testing for <code>class</code> (with or without a namespace), 
  use <code><a href="pyparsing-module.html#withClass" 
  class="link">withClass</a></code>.</p>
  <p>To verify that the attribute exists, but without specifying a value, 
  pass <code>withAttribute.ANY_VALUE</code> as the value.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="infixNotation"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">infixNotation</span>(<span class="sig-arg">baseExpr</span>,
        <span class="sig-arg">opList</span>,
        <span class="sig-arg">lpar</span>=<span class="sig-default">Suppress:(&quot;(&quot;)</span>,
        <span class="sig-arg">rpar</span>=<span class="sig-default">Suppress:(&quot;)&quot;)</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#infixNotation">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper method for constructing grammars of expressions made up of 
  operators working in a precedence hierarchy.  Operators may be unary or 
  binary, left- or right-associative.  Parse actions can also be attached 
  to operator expressions.</p>
  <p>Parameters:</p>
  <ul>
    <li>
      baseExpr - expression representing the most basic element for the 
      nested
    </li>
    <li>
      opList - list of tuples, one for each operator precedence level in 
      the expression grammar; each tuple is of the form (opExpr, numTerms, 
      rightLeftAssoc, parseAction), where:
      <ul>
        <li>
          opExpr is the pyparsing expression for the operator; may also be 
          a string, which will be converted to a Literal; if numTerms is 3,
          opExpr is a tuple of two expressions, for the two operators 
          separating the 3 terms
        </li>
        <li>
          numTerms is the number of terms for this operator (must be 1, 2, 
          or 3)
        </li>
        <li>
          rightLeftAssoc is the indicator whether the operator is right or 
          left associative, using the pyparsing-defined constants 
          <code>opAssoc.RIGHT</code> and <code>opAssoc.LEFT</code>.
        </li>
        <li>
          parseAction is the parse action to be associated with expressions
          matching this operator expression (the parse action tuple member 
          may be omitted)
        </li>
      </ul>
    </li>
    <li>
      lpar - expression for matching left-parentheses 
      (default=Suppress('('))
    </li>
    <li>
      rpar - expression for matching right-parentheses 
      (default=Suppress(')'))
    </li>
  </ul>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="operatorPrecedence"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">operatorPrecedence</span>(<span class="sig-arg">baseExpr</span>,
        <span class="sig-arg">opList</span>,
        <span class="sig-arg">lpar</span>=<span class="sig-default">Suppress:(&quot;(&quot;)</span>,
        <span class="sig-arg">rpar</span>=<span class="sig-default">Suppress:(&quot;)&quot;)</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#infixNotation">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper method for constructing grammars of expressions made up of 
  operators working in a precedence hierarchy.  Operators may be unary or 
  binary, left- or right-associative.  Parse actions can also be attached 
  to operator expressions.</p>
  <p>Parameters:</p>
  <ul>
    <li>
      baseExpr - expression representing the most basic element for the 
      nested
    </li>
    <li>
      opList - list of tuples, one for each operator precedence level in 
      the expression grammar; each tuple is of the form (opExpr, numTerms, 
      rightLeftAssoc, parseAction), where:
      <ul>
        <li>
          opExpr is the pyparsing expression for the operator; may also be 
          a string, which will be converted to a Literal; if numTerms is 3,
          opExpr is a tuple of two expressions, for the two operators 
          separating the 3 terms
        </li>
        <li>
          numTerms is the number of terms for this operator (must be 1, 2, 
          or 3)
        </li>
        <li>
          rightLeftAssoc is the indicator whether the operator is right or 
          left associative, using the pyparsing-defined constants 
          <code>opAssoc.RIGHT</code> and <code>opAssoc.LEFT</code>.
        </li>
        <li>
          parseAction is the parse action to be associated with expressions
          matching this operator expression (the parse action tuple member 
          may be omitted)
        </li>
      </ul>
    </li>
    <li>
      lpar - expression for matching left-parentheses 
      (default=Suppress('('))
    </li>
    <li>
      rpar - expression for matching right-parentheses 
      (default=Suppress(')'))
    </li>
  </ul>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="nestedExpr"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">nestedExpr</span>(<span class="sig-arg">opener</span>=<span class="sig-default"><code class="variable-quote">'</code><code class="variable-string">(</code><code class="variable-quote">'</code></span>,
        <span class="sig-arg">closer</span>=<span class="sig-default"><code class="variable-quote">'</code><code class="variable-string">)</code><code class="variable-quote">'</code></span>,
        <span class="sig-arg">content</span>=<span class="sig-default">None</span>,
        <span class="sig-arg">ignoreExpr</span>=<span class="sig-default">quotedString using single or double quotes</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#nestedExpr">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper method for defining nested lists enclosed in opening and 
  closing delimiters (&quot;(&quot; and &quot;)&quot; are the default).</p>
  <p>Parameters:</p>
  <ul>
    <li>
      opener - opening character for a nested list (default=&quot;(&quot;);
      can also be a pyparsing expression
    </li>
    <li>
      closer - closing character for a nested list (default=&quot;)&quot;);
      can also be a pyparsing expression
    </li>
    <li>
      content - expression for items within the nested lists (default=None)
    </li>
    <li>
      ignoreExpr - expression for ignoring opening and closing delimiters 
      (default=quotedString)
    </li>
  </ul>
  <p>If an expression is not provided for the content argument, the nested 
  expression will capture all whitespace-delimited content between 
  delimiters as a list of separate values.</p>
  <p>Use the <code>ignoreExpr</code> argument to define expressions that 
  may contain opening or closing characters that should not be treated as 
  opening or closing characters for nesting, such as quotedString or a 
  comment expression.  Specify multiple expressions using an <code><a 
  href="pyparsing.Or-class.html" class="link">Or</a></code> or <code><a 
  href="pyparsing.MatchFirst-class.html" 
  class="link">MatchFirst</a></code>. The default is <a 
  href="pyparsing-module.html#quotedString" class="link">quotedString</a>, 
  but if no expressions are to be ignored, then pass <code>None</code> for 
  this argument.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<a name="indentedBlock"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">indentedBlock</span>(<span class="sig-arg">blockStatementExpr</span>,
        <span class="sig-arg">indentStack</span>,
        <span class="sig-arg">indent</span>=<span class="sig-default">True</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="pyparsing-pysrc.html#indentedBlock">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Helper method for defining space-delimited indentation blocks, such as
  those used to define block statements in Python source code.</p>
  <p>Parameters:</p>
  <ul>
    <li>
      blockStatementExpr - expression defining syntax of statement that is 
      repeated within the indented block
    </li>
    <li>
      indentStack - list created by caller to manage indentation stack 
      (multiple statementWithIndentedBlock expressions within a single 
      grammar should share a common indentStack)
    </li>
    <li>
      indent - boolean indicating whether block must be indented beyond the
      the current level; set to False for block of left-most statements 
      (default=True)
    </li>
  </ul>
  <p>A valid block must contain at least one 
  <code>blockStatement</code>.</p>
  <dl class="fields">
  </dl>
</td></tr></table>
</div>
<br />
<!-- ==================== VARIABLES DETAILS ==================== -->
<a name="section-VariablesDetails"></a>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td align="left" colspan="2" class="table-header">
    <span class="table-header">Variables Details</span></td>
</tr>
</table>
<a name="alphanums"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <h3 class="epydoc">alphanums</h3>
  
  <dl class="fields">
  </dl>
  <dl class="fields">
    <dt>Value:</dt>
      <dd><table><tr><td><pre class="variable">
<code class="variable-quote">'</code><code class="variable-string">ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789</code><code class="variable-quote">'</code>
</pre></td></tr></table>
</dd>
  </dl>
</td></tr></table>
</div>
<a name="printables"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <h3 class="epydoc">printables</h3>
  
  <dl class="fields">
  </dl>
  <dl class="fields">
    <dt>Value:</dt>
      <dd><table><tr><td><pre class="variable">
<code class="variable-quote">'</code><code class="variable-string">0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!&quot;#$%&amp;\</code><span class="variable-linewrap"><img src="crarr.png" alt="\" /></span>
<code class="variable-string">'()*+,-./:;&lt;=&gt;?@[\\]^_`{|}~</code><code class="variable-quote">'</code>
</pre></td></tr></table>
</dd>
  </dl>
</td></tr></table>
</div>
<a name="alphas8bit"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <h3 class="epydoc">alphas8bit</h3>
  
  <dl class="fields">
  </dl>
  <dl class="fields">
    <dt>Value:</dt>
      <dd><table><tr><td><pre class="variable">
<code class="variable-quote">u'</code><code class="variable-string">&#192;&#193;&#194;&#195;&#196;&#197;&#198;&#199;&#200;&#201;&#202;&#203;&#204;&#205;&#206;&#207;&#208;&#209;&#210;&#211;&#212;&#213;&#214;&#216;&#217;&#218;&#219;&#220;&#221;&#222;&#223;&#224;&#225;&#226;&#227;&#228;&#229;&#230;&#231;&#232;&#233;&#234;&#235;&#236;&#237;&#238;&#239;&#240;&#241;&#242;&#243;&#244;&#245;&#246;&#248;&#249;&#250;&#251;&#252;&#253;&#254;&#255;</code><code class="variable-quote">'</code>
</pre></td></tr></table>
</dd>
  </dl>
</td></tr></table>
</div>
<br />
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th bgcolor="#70b0f0" class="navbar-select"
          >&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</th>

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
