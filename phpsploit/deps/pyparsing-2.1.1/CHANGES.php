==========
Change Log
==========

Version 2.1.1 - 
------------------------------
- Added support for assigning to ParseResults using slices.

- Fixed bug in ParseResults.toDict(), in which dict values were always
  converted to dicts, even if they were just unkeyed lists of tokens.
  Reported on SO by Gerald Thibault, thanks Gerald!

- Fixed bug in SkipTo when using failOn, reported by robyschek, thanks!

- Fixed bug in Each introduced in 2.1.0, reported by AND patch and
  unit test submitted by robyschek, well done!

- Removed use of functools.partial in replaceWith, as this creates
  an ambiguous signature for the generated parse action, which fails in 
  PyPy. Reported by Evan Hubinger, thanks Evan!

- Added default behavior to QuotedString to convert embedded '\t', '\n',
  etc. characters to their whitespace counterparts. Found during Q&A
  exchange on SO with Maxim.


Version 2.1.0 - February, 2016
------------------------------
- Modified the internal _trim_arity method to distinguish between 
  TypeError's raised while trying to determine parse action arity and
  those raised within the parse action itself. This will clear up those
  confusing "<lambda>() takes exactly 1 argument (0 given)" error 
  messages when there is an actual TypeError in the body of the parse
  action. Thanks to all who have raised this issue in the past, and
  most recently to Michael Cohen, who sent in a proposed patch, and got
  me to finally tackle this problem.

- Added compatibility for pickle protocols 2-4 when pickling ParseResults. 
  In Python 2.x, protocol 0 was the default, and protocol 2 did not work.
  In Python 3.x, protocol 3 is the default, so explicitly naming 
  protocol 0 or 1 was required to pickle ParseResults. With this release,
  all protocols 0-4 are supported. Thanks for reporting this on StackOverflow,
  Arne Wolframm, and for providing a nice simple test case!

- Added optional 'stopOn' argument to ZeroOrMore and OneOrMore, to
  simplify breaking on stop tokens that would match the repetition 
  expression. 
  
  It is a common problem to fail to look ahead when matching repetitive 
  tokens if the sentinel at the end also matches the repetition
  expression, as when parsing "BEGIN aaa bbb ccc END" with:
  
    "BEGIN" + OneOrMore(Word(alphas)) + "END"

  Since "END" matches the repetition expression "Word(alphas)", it will
  never get parsed as the terminating sentinel. Up until now, this has 
  to be resolved by the user inserting their own negative lookahead:
  
    "BEGIN" + OneOrMore(~Literal("END") + Word(alphas)) + "END"
  
  Using stopOn, they can more easily write:
  
    "BEGIN" + OneOrMore(Word(alphas), stopOn="END") + "END"
  
  The stopOn argument can be a literal string or a pyparsing expression.
  Inspired by a question by Lamakaha on StackOverflow (and many previous
  questions with the same negative-lookahead resolution).

- Added expression names for many internal and builtin expressions, to 
  reduce name and error message overhead during parsing.

- Converted helper lambdas to functions to refactor and add docstring
  support.

- Fixed ParseResults.asDict() to correctly convert nested ParseResults
  values to dicts.
  
- Cleaned up some examples, fixed typo in fourFn.py identified by
  aristotle2600 on reddit.

- Removed keepOriginalText helper method, which was deprecated ages ago.
  Superceded by originalTextFor.

- Same for the Upcase class, which was long ago deprecated and replaced
  with the upcaseTokens method.



Version 2.0.7 - December, 2015
------------------------------
- Simplified string representation of Forward class, to avoid memory
  and performance errors while building ParseException messages. Thanks,
  Will McGugan, Andrea Censi, and Martijn Vermaat for the bug reports and
  test code.

- Cleaned up additional issues from enhancing the error messages for
  Or and MatchFirst, handling Unicode values in expressions. Fixes Unicode
  encoding issues in Python 2, thanks to Evan Hubinger for the bug report.

- Fixed implementation of dir() for ParseResults - was leaving out all the
  defined methods and just adding the custom results names.

- Fixed bug in ignore() that was introduced in pyparsing 1.5.3, that would
  not accept a string literal as the ignore expression.

- Added new example parseTabularData.py to illustrate parsing of data 
  formatted in columns, with detection of empty cells.

- Updated a number of examples to more current Python and pyparsing 
  forms.


Version 2.0.6 - November, 2015
------------------------------
- Fixed a bug in Each when multiple Optional elements are present.
  Thanks for reporting this, whereswalden on SO.

- Fixed another bug in Each, when Optional elements have results names
  or parse actions, reported by Max Rothman - thank you, Max!

- Added optional parseAll argument to runTests, whether tests should
  require the entire input string to be parsed or not (similar to 
  parseAll argument to parseString). Plus a little neaten-up of the
  output on Python 2 (no stray ()'s).

- Modified exception messages from MatchFirst and Or expressions. These
  were formerly misleading as they would only give the first or longest
  exception mismatch error message. Now the error message includes all
  the alternatives that were possible matches. Originally proposed by 
  a pyparsing user, but I've lost the email thread - finally figured out
  a fairly clean way to do this.

- Fixed a bug in Or, when a parse action on an alternative raises an 
  exception, other potentially matching alternatives were not always tried.
  Reported by TheVeryOmni on the pyparsing wiki, thanks!

- Fixed a bug to dump() introduced in 2.0.4, where list values were shown
  in duplicate.


Version 2.0.5 - October, 2015
-----------------------------
- (&$(@#&$(@!!!!  Some "print" statements snuck into pyparsing v2.0.4,
  breaking Python 3 compatibility! Fixed. Reported by jenshn, thanks!
  

Version 2.0.4 - October, 2015
-----------------------------
- Added ParserElement.addCondition, to simplify adding parse actions 
  that act primarily as filters. If the given condition evaluates False,
  pyparsing will raise a ParseException. The condition should be a method
  with the same method signature as a parse action, but should return a
  boolean. Suggested by Victor Porton, nice idea Victor, thanks!

- Slight mod to srange to accept unicode literals for the input string,
  such as "[а-яА-Я]" instead of "[\u0430-\u044f\u0410-\u042f]". Thanks 
  to Alexandr Suchkov for the patch!

- Enhanced implementation of replaceWith.

- Fixed enhanced ParseResults.dump() method when the results consists
  only of an unnamed array of sub-structure results. Reported by Robin
  Siebler, thanks for your patience and persistence, Robin!

- Fixed bug in fourFn.py example code, where pi and e were defined using
  CaselessLiteral instead of CaselessKeyword. This was not a problem until
  adding a new function 'exp', and the leading 'e' of 'exp' was accidentally
  parsed as the mathematical constant 'e'. Nice catch, Tom Grydeland - thanks!

- Adopt new-fangled Python features, like decorators and ternary expressions, 
  per suggestions from Williamzjc - thanks William! (Oh yeah, I'm not
  supporting Python 2.3 with this code any more...) Plus, some additional
  code fixes/cleanup - thanks again!

- Added ParserElement.runTests, a little test bench for quickly running
  an expression against a list of sample input strings. Basically, I got 
  tired of writing the same test code over and over, and finally added it
  as a test point method on ParserElement.

- Added withClass helper method, a simplified version of withAttribute for
  the common but annoying case when defining a filter on a div's class - 
  made difficult because 'class' is a Python reserved word.


Version 2.0.3 - October, 2014
-----------------------------
- Fixed escaping behavior in QuotedString. Formerly, only quotation
  marks (or characters designated as quotation marks in the QuotedString
  constructor) would be escaped. Now all escaped characters will be
  escaped, and the escaping backslashes will be removed.

- Fixed regression in ParseResults.pop() - pop() was pretty much
  broken after I added *improvements* in 2.0.2. Reported by Iain
  Shelvington, thanks Iain!

- Fixed bug in And class when initializing using a generator.

- Enhanced ParseResults.dump() method to list out nested ParseResults that
  are unnamed arrays of sub-structures.

- Fixed UnboundLocalError under Python 3.4 in oneOf method, reported
  on Sourceforge by aldanor, thanks!

- Fixed bug in ParseResults __init__ method, when returning non-ParseResults
  types from parse actions that implement __eq__. Raised during discussion 
  on the pyparsing wiki with cyrfer.


Version 2.0.2 - April, 2014
---------------------------
- Extended "expr(name)" shortcut (same as "expr.setResultsName(name)")
  to accept "expr()" as a shortcut for "expr.copy()".

- Added "locatedExpr(expr)" helper, to decorate any returned tokens
  with their location within the input string. Adds the results names
  locn_start and locn_end to the output parse results.

- Added "pprint()" method to ParseResults, to simplify troubleshooting
  and prettified output. Now instead of importing the pprint module
  and then writing "pprint.pprint(result)", you can just write
  "result.pprint()".  This method also accepts addtional positional and
  keyword arguments (such as indent, width, etc.), which get passed 
  through directly to the pprint method 
  (see http://docs.python.org/2/library/pprint.html#pprint.pprint).

- Removed deprecation warnings when using '<<' for Forward expression
  assignment. '<<=' is still preferred, but '<<' will be retained
  for cases whre '<<=' operator is not suitable (such as in defining
  lambda expressions).

- Expanded argument compatibility for classes and functions that
  take list arguments, to now accept generators as well.

- Extended list-like behavior of ParseResults, adding support for
  append and extend. NOTE: if you have existing applications using
  these names as results names, you will have to access them using
  dict-style syntax: res["append"] and res["extend"]

- ParseResults emulates the change in list vs. iterator semantics for
  methods like keys(), values(), and items(). Under Python 2.x, these
  methods will return lists, under Python 3.x, these methods will 
  return iterators.

- ParseResults now has a method haskeys() which returns True or False
  depending on whether any results names have been defined. This simplifies
  testing for the existence of results names under Python 3.x, which 
  returns keys() as an iterator, not a list.

- ParseResults now supports both list and dict semantics for pop().
  If passed no argument or an integer argument, it will use list semantics
  and pop tokens from the list of parsed tokens. If passed a non-integer
  argument (most likely a string), it will use dict semantics and 
  pop the corresponding value from any defined results names. A
  second default return value argument is supported, just as in 
  dict.pop().

- Fixed bug in markInputline, thanks for reporting this, Matt Grant!

- Cleaned up my unit test environment, now runs with Python 2.6 and 
  3.3.


Version 2.0.1 - July, 2013
--------------------------
- Removed use of "nonlocal" that prevented using this version of 
  pyparsing with Python 2.6 and 2.7. This will make it easier to 
  install for packages that depend on pyparsing, under Python 
  versions 2.6 and later. Those using older versions of Python
  will have to manually install pyparsing 1.5.7.

- Fixed implementation of <<= operator to return self; reported by
  Luc J. Bourhis, with patch fix by Mathias Mamsch - thanks, Luc
  and Mathias!


Version 2.0.0 - November, 2012
------------------------------
- Rather than release another combined Python 2.x/3.x release
  I've decided to start a new major version that is only 
  compatible with Python 3.x (and consequently Python 2.7 as
  well due to backporting of key features). This version will
  be the main development path from now on, with little follow-on
  development on the 1.5.x path.

- Operator '<<' is now deprecated, in favor of operator '<<=' for
  attaching parsing expressions to Forward() expressions. This is
  being done to address precedence of operations problems with '<<'.
  Operator '<<' will be removed in a future version of pyparsing.


Version 1.5.7 - November, 2012
-----------------------------
- NOTE: This is the last release of pyparsing that will try to 
  maintain compatibility with Python versions < 2.6. The next
  release of pyparsing will be version 2.0.0, using new Python
  syntax that will not be compatible for Python version 2.5 or
  older.

- An awesome new example is included in this release, submitted
  by Luca DellOlio, for parsing ANTLR grammar definitions, nice
  work Luca!

- Fixed implementation of ParseResults.__str__ to use Pythonic
  ''.join() instead of repeated string concatenation. This
  purportedly has been a performance issue under PyPy.

- Fixed bug in ParseResults.__dir__ under Python 3, reported by
  Thomas Kluyver, thank you Thomas!

- Added ParserElement.inlineLiteralsUsing static method, to 
  override pyparsing's default behavior of converting string
  literals to Literal instances, to use other classes (such
  as Suppress or CaselessLiteral).

- Added new operator '<<=', which will eventually replace '<<' for 
  storing the contents of a Forward(). '<<=' does not have the same
  operator precedence problems that '<<' does.

- 'operatorPrecedence' is being renamed 'infixNotation' as a better
  description of what this helper function creates. 'operatorPrecedence'
  is deprecated, and will be dropped entirely in a future release.

- Added optional arguments lpar and rpar to operatorPrecedence, so that 
  expressions that use it can override the default suppression of the
  grouping characters.

- Added support for using single argument builtin functions as parse 
  actions.  Now you can write 'expr.setParseAction(len)' and get back
  the length of the list of matched tokens.  Supported builtins are:
  sum, len, sorted, reversed, list, tuple, set, any, all, min, and max.
  A script demonstrating this feature is included in the examples
  directory.

- Improved linking in generated docs, proposed on the pyparsing wiki
  by techtonik, thanks!

- Fixed a bug in the definition of 'alphas', which was based on the 
  string.uppercase and string.lowercase "constants", which in fact 
  *aren't* constant, but vary with locale settings. This could make 
  parsers locale-sensitive in a subtle way. Thanks to Kef Schecter for
  his diligence in following through on reporting and monitoring 
  this bugfix!

- Fixed a bug in the Py3 version of pyparsing, during exception
  handling with packrat parsing enabled, reported by Catherine 
  Devlin - thanks Catherine!

- Fixed typo in ParseBaseException.__dir__, reported anonymously on 
  the SourceForge bug tracker, thank you Pyparsing User With No Name.

- Fixed bug in srange when using '\x###' hex character codes.

- Addeed optional 'intExpr' argument to countedArray, so that you 
  can define your own expression that will evaluate to an integer,
  to be used as the count for the following elements. Allows you 
  to define a countedArray with the count given in hex, for example,
  by defining intExpr as "Word(hexnums).setParseAction(int(t[0],16))".


Version 1.5.6 - June, 2011
----------------------------
- Cleanup of parse action normalizing code, to be more version-tolerant,
  and robust in the face of future Python versions - much thanks to 
  Raymond Hettinger for this rewrite!

- Removal of exception cacheing, addressing a memory leak condition
  in Python 3. Thanks to Michael Droettboom and the Cape Town PUG for
  their analysis and work on this problem!

- Fixed bug when using packrat parsing, where a previously parsed
  expression would duplicate subsequent tokens - reported by Frankie 
  Ribery on stackoverflow, thanks!

- Added 'ungroup' helper method, to address token grouping done
  implicitly by And expressions, even if only one expression in the
  And actually returns any text - also inspired by stackoverflow
  discussion with Frankie Ribery!

- Fixed bug in srange, which accepted escaped hex characters of the 
  form '\0x##', but should be '\x##'.  Both forms will be supported
  for backwards compatibility.

- Enhancement to countedArray, accepting an optional expression to be
  used for matching the leading integer count - proposed by Mathias on
  the pyparsing mailing list, good idea!

- Added the Verilog parser to the provided set of examples, under the
  MIT license.  While this frees up this parser for any use, if you find
  yourself using it in a commercial purpose, please consider making a
  charitable donation as described in the parser's header.

- Added the excludeChars argument to the Word class, to simplify defining
  a word composed of all characters in a large range except for one or
  two. Suggested by JesterEE on the pyparsing wiki.

- Added optional overlap parameter to scanString, to return overlapping
  matches found in the source text.

- Updated oneOf internal regular expression generation, with improved
  parse time performance.
  
- Slight performance improvement in transformString, removing empty
  strings from the list of string fragments built while scanning the
  source text, before calling ''.join.  Especially useful when using 
  transformString to strip out selected text.

- Enhanced form of using the "expr('name')" style of results naming,
  in lieu of calling setResultsName.  If name ends with an '*', then
  this is equivalent to expr.setResultsName('name',listAllMatches=True).

- Fixed up internal list flattener to use iteration instead of recursion,
  to avoid stack overflow when transforming large files.

- Added other new examples:
  . protobuf parser - parses Google's protobuf language
  . btpyparse - a BibTex parser contributed by Matthew Brett,
    with test suite test_bibparse.py (thanks, Matthew!)
  . groupUsingListAllMatches.py - demo using trailing '*' for results 
    names


Version 1.5.5 - August, 2010
----------------------------

- Typo in Python3 version of pyparsing, "builtin" should be "builtins".
  (sigh)


Version 1.5.4 - August, 2010
----------------------------

- Fixed __builtins__ and file references in Python 3 code, thanks to 
  Greg Watson, saulspatz, sminos, and Mark Summerfield for reporting 
  their Python 3 experiences.

- Added new example, apicheck.py, as a sample of scanning a Tcl-like
  language for functions with incorrect number of arguments (difficult
  to track down in Tcl languages).  This example uses some interesting
  methods for capturing exceptions while scanning through source
  code.

- Added new example deltaTime.py, that takes everyday time references
  like "an hour from now", "2 days ago", "next Sunday at 2pm".


Version 1.5.3 - June, 2010
--------------------------

- ======= NOTE:  API CHANGE!!!!!!! ===============
  With this release, and henceforward, the pyparsing module is 
  imported as "pyparsing" on both Python 2.x and Python 3.x versions.

- Fixed up setup.py to auto-detect Python version and install the 
  correct version of pyparsing - suggested by Alex Martelli, 
  thanks, Alex! (and my apologies to all those who struggled with 
  those spurious installation errors caused by my earlier 
  fumblings!)

- Fixed bug on Python3 when using parseFile, getting bytes instead of
  a str from the input file.

- Fixed subtle bug in originalTextFor, if followed by
  significant whitespace (like a newline) - discovered by
  Francis Vidal, thanks!

- Fixed very sneaky bug in Each, in which Optional elements were
  not completely recognized as optional - found by Tal Weiss, thanks
  for your patience.
  
- Fixed off-by-1 bug in line() method when the first line of the
  input text was an empty line. Thanks to John Krukoff for submitting
  a patch!
  
- Fixed bug in transformString if grammar contains Group expressions,
  thanks to patch submitted by barnabas79, nice work!
  
- Fixed bug in originalTextFor in which trailing comments or otherwised
  ignored text got slurped in with the matched expression.  Thanks to
  michael_ramirez44 on the pyparsing wiki for reporting this just in
  time to get into this release!

- Added better support for summing ParseResults, see the new example,
  parseResultsSumExample.py.
  
- Added support for composing a Regex using a compiled RE object; 
  thanks to my new colleague, Mike Thornton!

- In version 1.5.2, I changed the way exceptions are raised in order
  to simplify the stacktraces reported during parsing.  An anonymous
  user posted a bug report on SF that this behavior makes it difficult
  to debug some complex parsers, or parsers nested within parsers. In
  this release I've added a class attribute ParserElement.verbose_stacktrace,
  with a default value of False. If you set this to True, pyparsing will 
  report stacktraces using the pre-1.5.2 behavior.

- New examples: 

  . pymicko.py, a MicroC compiler submitted by Zarko Zivanov. 
    (Note: this example is separately licensed under the GPLv3, 
    and requires Python 2.6 or higher.)  Thank you, Zarko!

  . oc.py, a subset C parser, using the BNF from the 1996 Obfuscated C
    Contest.

  . stateMachine2.py, a modified version of stateMachine.py submitted 
    by Matt Anderson, that is compatible with Python versions 2.7 and 
    above - thanks so much, Matt!
    
  . select_parser.py, a parser for reading SQLite SELECT statements, 
    as specified at http://www.sqlite.org/lang_select.html; this goes
    into much more detail than the simple SQL parser included in pyparsing's
    source code
    
  . excelExpr.py, a *simplistic* first-cut at a parser for Excel 
    expressions, which I originally posted on comp.lang.python in January, 
    2010; beware, this parser omits many common Excel cases (addition of
    numbers represented as strings, references to named ranges)
    
  . cpp_enum_parser.py, a nice little parser posted my Mark Tolonen on
    comp.lang.python in August, 2009 (redistributed here with Mark's
    permission).  Thanks a bunch, Mark!
    
  . partial_gene_match.py, a sample I posted to Stackoverflow.com,
    implementing a special variation on Literal that does "close" matching,
    up to a given number of allowed mismatches.  The application was to 
    find matching gene sequences, with allowance for one or two mismatches.
    
  . tagCapture.py, a sample showing how to use a Forward placeholder to
    enforce matching of text parsed in a previous expression.

  . matchPreviousDemo.py, simple demo showing how the matchPreviousLiteral
    helper method is used to match a previously parsed token.


Version 1.5.2 - April, 2009
------------------------------
- Added pyparsing_py3.py module, so that Python 3 users can use
  pyparsing by changing their pyparsing import statement to:
  
      import pyparsing_py3

  Thanks for help from Patrick Laban and his friend Geremy 
  Condra on the pyparsing wiki.
  
- Removed __slots__ declaration on ParseBaseException, for
  compatibility with IronPython 2.0.1.  Raised by David
  Lawler on the pyparsing wiki, thanks David!
  
- Fixed bug in SkipTo/failOn handling - caught by eagle eye 
  cpennington on the pyparsing wiki!

- Fixed second bug in SkipTo when using the ignore constructor
  argument, reported by Catherine Devlin, thanks!
  
- Fixed obscure bug reported by Eike Welk when using a class
  as a ParseAction with an errant __getitem__ method.

- Simplified exception stack traces when reporting parse 
  exceptions back to caller of parseString or parseFile - thanks
  to a tip from Peter Otten on comp.lang.python.

- Changed behavior of scanString to avoid infinitely looping on
  expressions that match zero-length strings.  Prompted by a
  question posted by ellisonbg on the wiki.

- Enhanced classes that take a list of expressions (And, Or, 
  MatchFirst, and Each) to accept generator expressions also.
  This can be useful when generating lists of alternative
  expressions, as in this case, where the user wanted to match
  any repetitions of '+', '*', '#', or '.', but not mixtures
  of them (that is, match '+++', but not '+-+'):
  
      codes = "+*#."
      format = MatchFirst(Word(c) for c in codes)
      
  Based on a problem posed by Denis Spir on the Python tutor
  list.

- Added new example eval_arith.py, which extends the example
  simpleArith.py to actually evaluate the parsed expressions.


Version 1.5.1 - October, 2008
-------------------------------
- Added new helper method originalTextFor, to replace the use of
  the current keepOriginalText parse action.  Now instead of 
  using the parse action, as in:
  
      fullName = Word(alphas) + Word(alphas)
      fullName.setParseAction(keepOriginalText)
      
  (in this example, we used keepOriginalText to restore any white
  space that may have been skipped between the first and last
  names)
  You can now write:
  
      fullName = originalTextFor(Word(alphas) + Word(alphas))
      
  The implementation of originalTextFor is simpler and faster than
  keepOriginalText, and does not depend on using the inspect or
  imp modules.
  
- Added optional parseAll argument to parseFile, to be consistent
  with parseAll argument to parseString.  Posted by pboucher on the
  pyparsing wiki, thanks!

- Added failOn argument to SkipTo, so that grammars can define
  literal strings or pyparsing expressions which, if found in the
  skipped text, will cause SkipTo to fail.  Useful to prevent 
  SkipTo from reading past terminating expression.  Instigated by
  question posed by Aki Niimura on the pyparsing wiki.

- Fixed bug in nestedExpr if multi-character expressions are given
  for nesting delimiters.  Patch provided by new pyparsing user,
  Hans-Martin Gaudecker - thanks, H-M!

- Removed dependency on xml.sax.saxutils.escape, and included
  internal implementation instead - proposed by Mike Droettboom on
  the pyparsing mailing list, thanks Mike!  Also fixed erroneous
  mapping in replaceHTMLEntity of &quot; to ', now correctly maps
  to ".  (Also added support for mapping &apos; to '.)

- Fixed typo in ParseResults.insert, found by Alejandro Dubrovsky,
  good catch!

- Added __dir__() methods to ParseBaseException and ParseResults,
  to support new dir() behavior in Py2.6 and Py3.0.  If dir() is
  called on a ParseResults object, the returned list will include
  the base set of attribute names, plus any results names that are
  defined.

- Fixed bug in ParseResults.asXML(), in which the first named
  item within a ParseResults gets reported with an <ITEM> tag 
  instead of with the correct results name.
  
- Fixed bug in '-' error stop, when '-' operator is used inside a 
  Combine expression.

- Reverted generator expression to use list comprehension, for 
  better compatibility with old versions of Python.  Reported by
  jester/artixdesign on the SourceForge pyparsing discussion list.

- Fixed bug in parseString(parseAll=True), when the input string
  ends with a comment or whitespace.

- Fixed bug in LineStart and LineEnd that did not recognize any
  special whitespace chars defined using ParserElement.setDefault-
  WhitespaceChars, found while debugging an issue for Marek Kubica,
  thanks for the new test case, Marek!

- Made Forward class more tolerant of subclassing.


Version 1.5.0 - June, 2008
--------------------------
This version of pyparsing includes work on two long-standing
FAQ's: support for forcing parsing of the complete input string
(without having to explicitly append StringEnd() to the grammar),
and a method to improve the mechanism of detecting where syntax
errors occur in an input string with various optional and
alternative paths.  This release also includes a helper method
to simplify definition of indentation-based grammars.  With
these changes (and the past few minor updates), I thought it was
finally time to bump the minor rev number on pyparsing - so
1.5.0 is now available!  Read on...

- AT LAST!!!  You can now call parseString and have it raise
  an exception if the expression does not parse the entire
  input string.  This has been an FAQ for a LONG time.

  The parseString method now includes an optional parseAll
  argument (default=False).  If parseAll is set to True, then
  the given parse expression must parse the entire input
  string.  (This is equivalent to adding StringEnd() to the
  end of the expression.)  The default value is False to
  retain backward compatibility.

  Inspired by MANY requests over the years, most recently by
  ecir-hana on the pyparsing wiki!

- Added new operator '-' for composing grammar sequences. '-'
  behaves just like '+' in creating And expressions, but '-'
  is used to mark grammar structures that should stop parsing
  immediately and report a syntax error, rather than just
  backtracking to the last successful parse and trying another
  alternative.  For instance, running the following code:

    port_definition = Keyword("port") + '=' + Word(nums)
    entity_definition = Keyword("entity") + "{" +
        Optional(port_definition) + "}"

    entity_definition.parseString("entity { port 100 }")

  pyparsing fails to detect the missing '=' in the port definition.
  But, since this expression is optional, pyparsing then proceeds
  to try to match the closing '}' of the entity_definition.  Not
  finding it, pyparsing reports that there was no '}' after the '{'
  character.  Instead, we would like pyparsing to parse the 'port'
  keyword, and if not followed by an equals sign and an integer,
  to signal this as a syntax error.

  This can now be done simply by changing the port_definition to:

    port_definition = Keyword("port") - '=' + Word(nums)

  Now after successfully parsing 'port', pyparsing must also find
  an equals sign and an integer, or it will raise a fatal syntax
  exception.

  By judicious insertion of '-' operators, a pyparsing developer
  can have their grammar report much more informative syntax error
  messages.

  Patches and suggestions proposed by several contributors on
  the pyparsing mailing list and wiki - special thanks to
  Eike Welk and Thomas/Poldy on the pyparsing wiki!

- Added indentedBlock helper method, to encapsulate the parse
  actions and indentation stack management needed to keep track of
  indentation levels.  Use indentedBlock to define grammars for
  indentation-based grouping grammars, like Python's.

  indentedBlock takes up to 3 parameters:
    - blockStatementExpr - expression defining syntax of statement
        that is repeated within the indented block
    - indentStack - list created by caller to manage indentation
        stack (multiple indentedBlock expressions
        within a single grammar should share a common indentStack)
    - indent - boolean indicating whether block must be indented
        beyond the the current level; set to False for block of
        left-most statements (default=True)

  A valid block must contain at least one indented statement.

- Fixed bug in nestedExpr in which ignored expressions needed
  to be set off with whitespace.  Reported by Stefaan Himpe,
  nice catch!

- Expanded multiplication of an expression by a tuple, to
  accept tuple values of None:
  . expr*(n,None) or expr*(n,) is equivalent
    to expr*n + ZeroOrMore(expr)
    (read as "at least n instances of expr")
  . expr*(None,n) is equivalent to expr*(0,n)
    (read as "0 to n instances of expr")
  . expr*(None,None) is equivalent to ZeroOrMore(expr)
  . expr*(1,None) is equivalent to OneOrMore(expr)

  Note that expr*(None,n) does not raise an exception if
  more than n exprs exist in the input stream; that is,
  expr*(None,n) does not enforce a maximum number of expr
  occurrences.  If this behavior is desired, then write
  expr*(None,n) + ~expr

- Added None as a possible operator for operatorPrecedence.
  None signifies "no operator", as in multiplying m times x
  in "y=mx+b".

- Fixed bug in Each, reported by Michael Ramirez, in which the
  order of terms in the Each affected the parsing of the results.
  Problem was due to premature grouping of the expressions in
  the overall Each during grammar construction, before the
  complete Each was defined.  Thanks, Michael!

- Also fixed bug in Each in which Optional's with default values
  were not getting the defaults added to the results of the
  overall Each expression.

- Fixed a bug in Optional in which results names were not
  assigned if a default value was supplied.

- Cleaned up Py3K compatibility statements, including exception
  construction statements, and better equivalence between _ustr
  and basestring, and __nonzero__ and __bool__.


Version 1.4.11 - February, 2008
-------------------------------
- With help from Robert A. Clark, this version of pyparsing
  is compatible with Python 3.0a3.  Thanks for the help,
  Robert!

- Added WordStart and WordEnd positional classes, to support
  expressions that must occur at the start or end of a word.
  Proposed by piranha on the pyparsing wiki, good idea!

- Added matchOnlyAtCol helper parser action, to simplify
  parsing log or data files that have optional fields that are
  column dependent.  Inspired by a discussion thread with
  hubritic on comp.lang.python.

- Added withAttribute.ANY_VALUE as a match-all value when using
  withAttribute.  Used to ensure that an attribute is present,
  without having to match on the actual attribute value.

- Added get() method to ParseResults, similar to dict.get().
  Suggested by new pyparsing user, Alejandro Dubrovksy, thanks!

- Added '==' short-cut to see if a given string matches a
  pyparsing expression.  For instance, you can now write:

    integer = Word(nums)
    if "123" == integer:
       # do something

    print [ x for x in "123 234 asld".split() if x==integer ]
    # prints ['123', '234']

- Simplified the use of nestedExpr when using an expression for
  the opening or closing delimiters.  Now the content expression
  will not have to explicitly negate closing delimiters.  Found
  while working with dfinnie on GHOP Task #277, thanks!

- Fixed bug when defining ignorable expressions that are
  later enclosed in a wrapper expression (such as ZeroOrMore,
  OneOrMore, etc.) - found while working with Prabhu
  Gurumurthy, thanks Prahbu!

- Fixed bug in withAttribute in which keys were automatically
  converted to lowercase, making it impossible to match XML
  attributes with uppercase characters in them.  Using with-
  Attribute requires that you reference attributes in all
  lowercase if parsing HTML, and in correct case when parsing
  XML.

- Changed '<<' operator on Forward to return None, since this
  is really used as a pseudo-assignment operator, not as a
  left-shift operator.  By returning None, it is easier to
  catch faulty statements such as a << b | c, where precedence
  of operations causes the '|' operation to be performed
  *after* inserting b into a, so no alternation is actually
  implemented.  The correct form is a << (b | c).  With this
  change, an error will be reported instead of silently
  clipping the alternative term.  (Note: this may break some
  existing code, but if it does, the code had a silent bug in
  it anyway.)  Proposed by wcbarksdale on the pyparsing wiki,
  thanks!

- Several unit tests were added to pyparsing's regression
  suite, courtesy of the Google Highly-Open Participation
  Contest.  Thanks to all who administered and took part in
  this event!


Version 1.4.10 - December 9, 2007
---------------------------------
- Fixed bug introduced in v1.4.8, parse actions were called for
  intermediate operator levels, not just the deepest matching
  operation level.  Again, big thanks to Torsten Marek for
  helping isolate this problem!


Version 1.4.9 - December 8, 2007
--------------------------------
- Added '*' multiplication operator support when creating
  grammars, accepting either an integer, or a two-integer
  tuple multiplier, as in:
    ipAddress = Word(nums) + ('.'+Word(nums))*3
    usPhoneNumber = Word(nums) + ('-'+Word(nums))*(1,2)
  If multiplying by a tuple, the two integer values represent
  min and max multiples.  Suggested by Vincent of eToy.com,
  great idea, Vincent!

- Fixed bug in nestedExpr, original version was overly greedy!
  Thanks to Michael Ramirez for raising this issue.

- Fixed internal bug in ParseResults - when an item was deleted,
  the key indices were not updated.  Thanks to Tim Mitchell for
  posting a bugfix patch to the SF bug tracking system!

- Fixed internal bug in operatorPrecedence - when the results of
  a right-associative term were sent to a parse action, the wrong
  tokens were sent.  Reported by Torsten Marek, nice job!

- Added pop() method to ParseResults.  If pop is called with an
  integer or with no arguments, it will use list semantics and
  update the ParseResults' list of tokens.  If pop is called with
  a non-integer (a string, for instance), then it will use dict
  semantics and update the ParseResults' internal dict.
  Suggested by Donn Ingle, thanks Donn!

- Fixed quoted string built-ins to accept '\xHH' hex characters
  within the string.


Version 1.4.8 - October, 2007
-----------------------------
- Added new helper method nestedExpr to easily create expressions
  that parse lists of data in nested parentheses, braces, brackets,
  etc.

- Added withAttribute parse action helper, to simplify creating
  filtering parse actions to attach to expressions returned by
  makeHTMLTags and makeXMLTags.  Use withAttribute to qualify a
  starting tag with one or more required attribute values, to avoid
  false matches on common tags such as <TD> or <DIV>.

- Added new examples nested.py and withAttribute.py to demonstrate
  the new features.

- Added performance speedup to grammars using operatorPrecedence,
  instigated by Stefan Reichör - thanks for the feedback, Stefan!

- Fixed bug/typo when deleting an element from a ParseResults by
  using the element's results name.

- Fixed whitespace-skipping bug in wrapper classes (such as Group,
  Suppress, Combine, etc.) and when using setDebug(), reported by
  new pyparsing user dazzawazza on SourceForge, nice job!

- Added restriction to prevent defining Word or CharsNotIn expressions
  with minimum length of 0 (should use Optional if this is desired),
  and enhanced docstrings to reflect this limitation.  Issue was
  raised by Joey Tallieu, who submitted a patch with a slightly
  different solution.  Thanks for taking the initiative, Joey, and
  please keep submitting your ideas!

- Fixed bug in makeHTMLTags that did not detect HTML tag attributes
  with no '= value' portion (such as "<td nowrap>"), reported by
  hamidh on the pyparsing wiki - thanks!

- Fixed minor bug in makeHTMLTags and makeXMLTags, which did not
  accept whitespace in closing tags.


Version 1.4.7 - July, 2007
--------------------------
- NEW NOTATION SHORTCUT: ParserElement now accepts results names using
  a notational shortcut, following the expression with the results name
  in parentheses.  So this:

    stats = "AVE:" + realNum.setResultsName("average") + \
            "MIN:" + realNum.setResultsName("min") + \
            "MAX:" + realNum.setResultsName("max")

  can now be written as this:

    stats = "AVE:" + realNum("average") + \
            "MIN:" + realNum("min") + \
            "MAX:" + realNum("max")

  The intent behind this change is to make it simpler to define results
  names for significant fields within the expression, while keeping
  the grammar syntax clean and uncluttered.

- Fixed bug when packrat parsing is enabled, with cached ParseResults
  being updated by subsequent parsing.  Reported on the pyparsing
  wiki by Kambiz, thanks!

- Fixed bug in operatorPrecedence for unary operators with left
  associativity, if multiple operators were given for the same term.

- Fixed bug in example simpleBool.py, corrected precedence of "and" vs.
  "or" operations.

- Fixed bug in Dict class, in which keys were converted to strings
  whether they needed to be or not.  Have narrowed this logic to
  convert keys to strings only if the keys are ints (which would
  confuse __getitem__ behavior for list indexing vs. key lookup).

- Added ParserElement method setBreak(), which will invoke the pdb
  module's set_trace() function when this expression is about to be
  parsed.

- Fixed bug in StringEnd in which reading off the end of the input
  string raises an exception - should match.  Resolved while
  answering a question for Shawn on the pyparsing wiki.


Version 1.4.6 - April, 2007
---------------------------
- Simplified constructor for ParseFatalException, to support common
  exception construction idiom:
    raise ParseFatalException, "unexpected text: 'Spanish Inquisition'"

- Added method getTokensEndLoc(), to be called from within a parse action,
  for those parse actions that need both the starting *and* ending
  location of the parsed tokens within the input text.

- Enhanced behavior of keepOriginalText so that named parse fields are
  preserved, even though tokens are replaced with the original input
  text matched by the current expression.  Also, cleaned up the stack
  traversal to be more robust.  Suggested by Tim Arnold - thanks, Tim!

- Fixed subtle bug in which countedArray (and similar dynamic
  expressions configured in parse actions) failed to match within Or,
  Each, FollowedBy, or NotAny.  Reported by Ralf Vosseler, thanks for
  your patience, Ralf!

- Fixed Unicode bug in upcaseTokens and downcaseTokens parse actions,
  scanString, and default debugging actions; reported (and patch submitted)
  by Nikolai Zamkovoi, spasibo!

- Fixed bug when saving a tuple as a named result.  The returned
  token list gave the proper tuple value, but accessing the result by
  name only gave the first element of the tuple.  Reported by
  Poromenos, nice catch!

- Fixed bug in makeHTMLTags/makeXMLTags, which failed to match tag
  attributes with namespaces.

- Fixed bug in SkipTo when setting include=True, to have the skipped-to
  tokens correctly included in the returned data.  Reported by gunars on
  the pyparsing wiki, thanks!

- Fixed typobug in OnceOnly.reset method, omitted self argument.
  Submitted by eike welk, thanks for the lint-picking!

- Added performance enhancement to Forward class, suggested by
  akkartik on the pyparsing Wiki discussion, nice work!

- Added optional asKeyword to Word constructor, to indicate that the
  given word pattern should be matched only as a keyword, that is, it
  should only match if it is within word boundaries.

- Added S-expression parser to examples directory.

- Added macro substitution example to examples directory.

- Added holaMundo.py example, excerpted from Marco Alfonso's blog -
  muchas gracias, Marco!

- Modified internal cyclic references in ParseResults to use weakrefs;
  this should help reduce the memory footprint of large parsing
  programs, at some cost to performance (3-5%). Suggested by bca48150 on
  the pyparsing wiki, thanks!

- Enhanced the documentation describing the vagaries and idiosyncracies
  of parsing strings with embedded tabs, and the impact on:
  . parse actions
  . scanString
  . col and line helper functions
  (Suggested by eike welk in response to some unexplained inconsistencies
  between parsed location and offsets in the input string.)

- Cleaned up internal decorators to preserve function names,
  docstrings, etc.


Version 1.4.5 - December, 2006
------------------------------
- Removed debugging print statement from QuotedString class.  Sorry
  for not stripping this out before the 1.4.4 release!

- A significant performance improvement, the first one in a while!
  For my Verilog parser, this version of pyparsing is about double the
  speed - YMMV.

- Added support for pickling of ParseResults objects.  (Reported by
  Jeff Poole, thanks Jeff!)

- Fixed minor bug in makeHTMLTags that did not recognize tag attributes
  with embedded '-' or '_' characters.  Also, added support for
  passing expressions to makeHTMLTags and makeXMLTags, and used this
  feature to define the globals anyOpenTag and anyCloseTag.

- Fixed error in alphas8bit, I had omitted the y-with-umlaut character.

- Added punc8bit string to complement alphas8bit - it contains all the
  non-alphabetic, non-blank 8-bit characters.

- Added commonHTMLEntity expression, to match common HTML "ampersand"
  codes, such as "&lt;", "&gt;", "&amp;", "&nbsp;", and "&quot;".  This
  expression also defines a results name 'entity', which can be used
  to extract the entity field (that is, "lt", "gt", etc.).  Also added
  built-in parse action replaceHTMLEntity, which can be attached to
  commonHTMLEntity to translate "&lt;", "&gt;", "&amp;", "&nbsp;", and
  "&quot;" to "<", ">", "&", " ", and "'".

- Added example, htmlStripper.py, that strips HTML tags and scripts
  from HTML pages.  It also translates common HTML entities to their
  respective characters.


Version 1.4.4 - October, 2006
-------------------------------
- Fixed traceParseAction decorator to also trap and record exception
  returns from parse actions, and to handle parse actions with 0,
  1, 2, or 3 arguments.

- Enhanced parse action normalization to support using classes as
  parse actions; that is, the class constructor is called at parse
  time and the __init__ function is called with 0, 1, 2, or 3
  arguments.  If passing a class as a parse action, the __init__
  method must use one  of the valid parse action parameter list
  formats. (This technique is useful when using pyparsing to compile
  parsed text into a series of application objects - see the new
  example simpleBool.py.)

- Fixed bug in ParseResults when setting an item using an integer
  index. (Reported by Christopher Lambacher, thanks!)

- Fixed whitespace-skipping bug, patch submitted by Paolo Losi -
  grazie, Paolo!

- Fixed bug when a Combine contained an embedded Forward expression,
  reported by cie on the pyparsing wiki - good catch!

- Fixed listAllMatches bug, when a listAllMatches result was
  nested within another result. (Reported by don pasquale on
  comp.lang.python, well done!)

- Fixed bug in ParseResults items() method, when returning an item
  marked as listAllMatches=True

- Fixed bug in definition of cppStyleComment (and javaStyleComment)
  in which '//' line comments were not continued to the next line
  if the line ends with a '\'.  (Reported by eagle-eyed Ralph
  Corderoy!)

- Optimized re's for cppStyleComment and quotedString for better
  re performance - also provided by Ralph Corderoy, thanks!

- Added new example, indentedGrammarExample.py, showing how to
  define a grammar using indentation to show grouping (as Python
  does for defining statement nesting).  Instigated by an e-mail
  discussion with Andrew Dalke, thanks Andrew!

- Added new helper operatorPrecedence (based on e-mail list discussion
  with Ralph Corderoy and Paolo Losi), to facilitate definition of
  grammars for expressions with unary and binary operators.  For
  instance, this grammar defines a 6-function arithmetic expression
  grammar, with unary plus and minus, proper operator precedence,and
  right- and left-associativity:

    expr = operatorPrecedence( operand,
        [("!", 1, opAssoc.LEFT),
         ("^", 2, opAssoc.RIGHT),
         (oneOf("+ -"), 1, opAssoc.RIGHT),
         (oneOf("* /"), 2, opAssoc.LEFT),
         (oneOf("+ -"), 2, opAssoc.LEFT),]
        )

  Also added example simpleArith.py and simpleBool.py to provide
  more detailed code samples using this new helper method.

- Added new helpers matchPreviousLiteral and matchPreviousExpr, for
  creating adaptive parsing expressions that match the same content
  as was parsed in a previous parse expression.  For instance:

        first = Word(nums)
        matchExpr = first + ":" + matchPreviousLiteral(first)

  will match "1:1", but not "1:2".  Since this matches at the literal
  level, this will also match the leading "1:1" in "1:10".

  In contrast:

        first = Word(nums)
        matchExpr = first + ":" + matchPreviousExpr(first)

  will *not* match the leading "1:1" in "1:10"; the expressions are
  evaluated first, and then compared, so "1" is compared with "10".

- Added keepOriginalText parse action.  Sometimes pyparsing's
  whitespace-skipping leaves out too much whitespace.  Adding this
  parse action will restore any internal whitespace for a parse
  expression.  This is especially useful when defining expressions
  for scanString or transformString applications.

- Added __add__ method for ParseResults class, to better support
  using Python sum built-in for summing ParseResults objects returned
  from scanString.

- Added reset method for the new OnlyOnce class wrapper for parse
  actions (to allow a grammar to be used multiple times).

- Added optional maxMatches argument to scanString and searchString,
  to short-circuit scanning after 'n' expression matches are found.


Version 1.4.3 - July, 2006
------------------------------
- Fixed implementation of multiple parse actions for an expression
  (added in 1.4.2).
  . setParseAction() reverts to its previous behavior, setting
    one (or more) actions for an expression, overwriting any
    action or actions previously defined
  . new method addParseAction() appends one or more parse actions
    to the list of parse actions attached to an expression
  Now it is harder to accidentally append parse actions to an
  expression, when what you wanted to do was overwrite whatever had
  been defined before.  (Thanks, Jean-Paul Calderone!)

- Simplified interface to parse actions that do not require all 3
  parse action arguments.  Very rarely do parse actions require more
  than just the parsed tokens, yet parse actions still require all
  3 arguments including the string being parsed and the location
  within the string where the parse expression was matched.  With this
  release, parse actions may now be defined to be called as:
  . fn(string,locn,tokens)  (the current form)
  . fn(locn,tokens)
  . fn(tokens)
  . fn()
  The setParseAction and addParseAction methods will internally decorate
  the provided parse actions with compatible wrappers to conform to
  the full (string,locn,tokens) argument sequence.

- REMOVED SUPPORT FOR RETURNING PARSE LOCATION FROM A PARSE ACTION.
  I announced this in March, 2004, and gave a final warning in the last
  release.  Now you can return a tuple from a parse action, and it will
  be treated like any other return value (i.e., the tuple will be
  substituted for the incoming tokens passed to the parse action,
  which is useful when trying to parse strings into tuples).

- Added setFailAction method, taking a callable function fn that
  takes the arguments fn(s,loc,expr,err) where:
  . s - string being parsed
  . loc - location where expression match was attempted and failed
  . expr - the parse expression that failed
  . err - the exception thrown
  The function returns no values.  It may throw ParseFatalException
  if it is desired to stop parsing immediately.
  (Suggested by peter21081944 on wikispaces.com)

- Added class OnlyOnce as helper wrapper for parse actions.  OnlyOnce
  only permits a parse action to be called one time, after which
  all subsequent calls throw a ParseException.

- Added traceParseAction decorator to help debug parse actions.
  Simply insert "@traceParseAction" ahead of the definition of your
  parse action, and each invocation will be displayed, along with
  incoming arguments, and returned value.

- Fixed bug when copying ParserElements using copy() or
  setResultsName().  (Reported by Dan Thill, great catch!)

- Fixed bug in asXML() where token text contains <, >, and &
  characters - generated XML now escapes these as &lt;, &gt; and
  &amp;.  (Reported by Jacek Sieka, thanks!)

- Fixed bug in SkipTo() when searching for a StringEnd(). (Reported
  by Pete McEvoy, thanks Pete!)

- Fixed "except Exception" statements, the most critical added as part
  of the packrat parsing enhancement.  (Thanks, Erick Tryzelaar!)

- Fixed end-of-string infinite looping on LineEnd and StringEnd
  expressions.  (Thanks again to Erick Tryzelaar.)

- Modified setWhitespaceChars to return self, to be consistent with
  other ParserElement modifiers. (Suggested by Erick Tryzelaar.)

- Fixed bug/typo in new ParseResults.dump() method.

- Fixed bug in searchString() method, in which only the first token of
  an expression was returned.  searchString() now returns a
  ParseResults collection of all search matches.

- Added example program removeLineBreaks.py, a string transformer that
  converts text files with hard line-breaks into one with line breaks
  only between paragraphs.

- Added example program listAllMatches.py, to illustrate using the
  listAllMatches option when specifying results names (also shows new
  support for passing lists to oneOf).

- Added example program linenoExample.py, to illustrate using the
  helper methods lineno, line, and col, and returning objects from a
  parse action.

- Added example program parseListString.py, to which can parse the
  string representation of a Python list back into a true list.  Taken
  mostly from my PyCon presentation examples, but now with support
  for tuple elements, too!



Version 1.4.2 - April 1, 2006 (No foolin'!)
-------------------------------------------
- Significant speedup from memoizing nested expressions (a technique
  known as "packrat parsing"), thanks to Chris Lesniewski-Laas!  Your
  mileage may vary, but my Verilog parser almost doubled in speed to
  over 600 lines/sec!

  This speedup may break existing programs that use parse actions that
  have side-effects.  For this reason, packrat parsing is disabled when
  you first import pyparsing.  To activate the packrat feature, your
  program must call the class method ParserElement.enablePackrat().  If
  your program uses psyco to "compile as you go", you must call
  enablePackrat before calling psyco.full().  If you do not do this,
  Python will crash.  For best results, call enablePackrat() immediately
  after importing pyparsing.

- Added new helper method countedArray(expr), for defining patterns that
  start with a leading integer to indicate the number of array elements,
  followed by that many elements, matching the given expr parse
  expression.  For instance, this two-liner:
    wordArray = countedArray(Word(alphas))
    print wordArray.parseString("3 Practicality beats purity")[0]
  returns the parsed array of words:
    ['Practicality', 'beats', 'purity']
  The leading token '3' is suppressed, although it is easily obtained
  from the length of the returned array.
  (Inspired by e-mail discussion with Ralf Vosseler.)

- Added support for attaching multiple parse actions to a single
  ParserElement. (Suggested by Dan "Dang" Griffith - nice idea, Dan!)

- Added support for asymmetric quoting characters in the recently-added
  QuotedString class.  Now you can define your own quoted string syntax
  like "<<This is a string in double angle brackets.>>".  To define
  this custom form of QuotedString, your code would define:
    dblAngleQuotedString = QuotedString('<<',endQuoteChar='>>')
  QuotedString also supports escaped quotes, escape character other
  than '\', and multiline.

- Changed the default value returned internally by Optional, so that
  None can be used as a default value.  (Suggested by Steven Bethard -
  I finally saw the light!)

- Added dump() method to ParseResults, to make it easier to list out
  and diagnose values returned from calling parseString.

- A new example, a search query string parser, submitted by Steven
  Mooij and Rudolph Froger - a very interesting application, thanks!

- Added an example that parses the BNF in Python's Grammar file, in
  support of generating Python grammar documentation. (Suggested by
  J H Stovall.)

- A new example, submitted by Tim Cera, of a flexible parser module,
  using a simple config variable to adjust parsing for input formats
  that have slight variations - thanks, Tim!

- Added an example for parsing Roman numerals, showing the capability
  of parse actions to "compile" Roman numerals into their integer
  values during parsing.

- Added a new docs directory, for additional documentation or help.
  Currently, this includes the text and examples from my recent
  presentation at PyCon.

- Fixed another typo in CaselessKeyword, thanks Stefan Behnel.

- Expanded oneOf to also accept tuples, not just lists.  This really
  should be sufficient...

- Added deprecation warnings when tuple is returned from a parse action.
  Looking back, I see that I originally deprecated this feature in March,
  2004, so I'm guessing people really shouldn't have been using this
  feature - I'll drop it altogether in the next release, which will
  allow users to return a tuple from a parse action (which is really
  handy when trying to reconstuct tuples from a tuple string
  representation!).


Version 1.4.1 - February, 2006
------------------------------
- Converted generator expression in QuotedString class to list
  comprehension, to retain compatibility with Python 2.3. (Thanks, Titus
  Brown for the heads-up!)

- Added searchString() method to ParserElement, as an alternative to
  using "scanString(instring).next()[0][0]" to search through a string
  looking for a substring matching a given parse expression. (Inspired by
  e-mail conversation with Dave Feustel.)

- Modified oneOf to accept lists of strings as well as a single string
  of space-delimited literals.  (Suggested by Jacek Sieka - thanks!)

- Removed deprecated use of Upcase in pyparsing test code. (Also caught by
  Titus Brown.)

- Removed lstrip() call from Literal - too aggressive in stripping
  whitespace which may be valid for some grammars.  (Point raised by Jacek
  Sieka).  Also, made Literal more robust in the event of passing an empty
  string.

- Fixed bug in replaceWith when returning None.

- Added cautionary documentation for Forward class when assigning a
  MatchFirst expression, as in:
    fwdExpr << a | b | c
  Precedence of operators causes this to be evaluated as:
    (fwdExpr << a) | b | c
  thereby leaving b and c out as parseable alternatives.  Users must
  explicitly group the values inserted into the Forward:
    fwdExpr << (a | b | c)
  (Suggested by Scot Wilcoxon - thanks, Scot!)


Version 1.4 - January 18, 2006
------------------------------
- Added Regex class, to permit definition of complex embedded expressions
  using regular expressions. (Enhancement provided by John Beisley, great
  job!)

- Converted implementations of Word, oneOf, quoted string, and comment
  helpers to utilize regular expression matching.  Performance improvements
  in the 20-40% range.

- Added QuotedString class, to support definition of non-standard quoted
  strings (Suggested by Guillaume Proulx, thanks!)

- Added CaselessKeyword class, to streamline grammars with, well, caseless
  keywords (Proposed by Stefan Behnel, thanks!)

- Fixed bug in SkipTo, when using an ignoreable expression. (Patch provided
  by Anonymous, thanks, whoever-you-are!)

- Fixed typo in NoMatch class. (Good catch, Stefan Behnel!)

- Fixed minor bug in _makeTags(), using string.printables instead of
  pyparsing.printables.

- Cleaned up some of the expressions created by makeXXXTags helpers, to
  suppress extraneous <> characters.

- Added some grammar definition-time checking to verify that a grammar is
  being built using proper ParserElements.

- Added examples:
  . LAparser.py - linear algebra C preprocessor (submitted by Mike Ellis,
    thanks Mike!)
  . wordsToNum.py - converts word description of a number back to
    the original number (such as 'one hundred and twenty three' -> 123)
  . updated fourFn.py to support unary minus, added BNF comments


Version 1.3.3 - September 12, 2005
----------------------------------
- Improved support for Unicode strings that would be returned using
  srange.  Added greetingInKorean.py example, for a Korean version of
  "Hello, World!" using Unicode. (Thanks, June Kim!)

- Added 'hexnums' string constant (nums+"ABCDEFabcdef") for defining
  hexadecimal value expressions.

- NOTE: ===THIS CHANGE MAY BREAK EXISTING CODE===
  Modified tag and results definitions returned by makeHTMLTags(),
  to better support the looseness of HTML parsing.  Tags to be
  parsed are now caseless, and keys generated for tag attributes are
  now converted to lower case.

  Formerly, makeXMLTags("XYZ") would return a tag with results
  name of "startXYZ", this has been changed to "startXyz".  If this
  tag is matched against '<XYZ Abc="1" DEF="2" ghi="3">', the
  matched keys formerly would be "Abc", "DEF", and "ghi"; keys are
  now converted to lower case, giving keys of "abc", "def", and
  "ghi".  These changes were made to try to address the lax
  case sensitivity agreement between start and end tags in many
  HTML pages.

  No changes were made to makeXMLTags(), which assumes more rigorous
  parsing rules.

  Also, cleaned up case-sensitivity bugs in closing tags, and
  switched to using Keyword instead of Literal class for tags.
  (Thanks, Steve Young, for getting me to look at these in more
  detail!)

- Added two helper parse actions, upcaseTokens and downcaseTokens,
  which will convert matched text to all uppercase or lowercase,
  respectively.

- Deprecated Upcase class, to be replaced by upcaseTokens parse
  action.

- Converted messages sent to stderr to use warnings module, such as
  when constructing a Literal with an empty string, one should use
  the Empty() class or the empty helper instead.

- Added ' ' (space) as an escapable character within a quoted
  string.

- Added helper expressions for common comment types, in addition
  to the existing cStyleComment (/*...*/) and htmlStyleComment
  (<!-- ... -->)
  . dblSlashComment = // ... (to end of line)
  . cppStyleComment = cStyleComment or dblSlashComment
  . javaStyleComment = cppStyleComment
  . pythonStyleComment = # ... (to end of line)



Version 1.3.2 - July 24, 2005
-----------------------------
- Added Each class as an enhanced version of And.  'Each' requires
  that all given expressions be present, but may occur in any order.
  Special handling is provided to group ZeroOrMore and OneOrMore
  elements that occur out-of-order in the input string.  You can also
  construct 'Each' objects by joining expressions with the '&'
  operator.  When using the Each class, results names are strongly
  recommended for accessing the matched tokens. (Suggested by Pradam
  Amini - thanks, Pradam!)

- Stricter interpretation of 'max' qualifier on Word elements.  If the
  'max' attribute is specified, matching will fail if an input field
  contains more than 'max' consecutive body characters.  For example,
  previously, Word(nums,max=3) would match the first three characters
  of '0123456', returning '012' and continuing parsing at '3'.  Now,
  when constructed using the max attribute, Word will raise an
  exception with this string.

- Cleaner handling of nested dictionaries returned by Dict.  No
  longer necessary to dereference sub-dictionaries as element [0] of
  their parents.
  === NOTE: THIS CHANGE MAY BREAK SOME EXISTING CODE, BUT ONLY IF
  PARSING NESTED DICTIONARIES USING THE LITTLE-USED DICT CLASS ===
  (Prompted by discussion thread on the Python Tutor list, with
  contributions from Danny Yoo, Kent Johnson, and original post by
  Liam Clarke - thanks all!)



Version 1.3.1 - June, 2005
----------------------------------
- Added markInputline() method to ParseException, to display the input
  text line location of the parsing exception. (Thanks, Stefan Behnel!)

- Added setDefaultKeywordChars(), so that Keyword definitions using a
  custom keyword character set do not all need to add the keywordChars
  constructor argument (similar to setDefaultWhitespaceChars()).
  (suggested by rzhanka on the SourceForge pyparsing forum.)

- Simplified passing debug actions to setDebugAction().  You can now
  pass 'None' for a debug action if you want to take the default
  debug behavior.  To suppress a particular debug action, you can pass
  the pyparsing method nullDebugAction.

- Refactored parse exception classes, moved all behavior to
  ParseBaseException, and the former ParseException is now a subclass of
  ParseBaseException.  Added a second subclass, ParseFatalException, as
  a subclass of ParseBaseException.  User-defined parse actions can raise
  ParseFatalException if a data inconsistency is detected (such as a
  begin-tag/end-tag mismatch), and this will stop all parsing immediately.
  (Inspired by e-mail thread with Michele Petrazzo - thanks, Michelle!)

- Added helper methods makeXMLTags and makeHTMLTags, that simplify the
  definition of XML or HTML tag parse expressions for a given tagname.
  Both functions return a pair of parse expressions, one for the opening
  tag (that is, '<tagname>') and one for the closing tag ('</tagname>').
  The opening tagame also recognizes any attribute definitions that have
  been included in the opening tag, as well as an empty tag (one with a
  trailing '/', as in '<BODY/>' which is equivalent to '<BODY></BODY>').
  makeXMLTags uses stricter XML syntax for attributes, requiring that they
  be enclosed in double quote characters - makeHTMLTags is more lenient,
  and accepts single-quoted strings or any contiguous string of characters
  up to the next whitespace character or '>' character.  Attributes can
  be retrieved as dictionary or attribute values of the returned results
  from the opening tag.

- Added example minimath2.py, a refinement on fourFn.py that adds
  an interactive session and support for variables.  (Thanks, Steven Siew!)

- Added performance improvement, up to 20% reduction!  (Found while working
  with Wolfgang Borgert on performance tuning of his TTCN3 parser.)

- And another performance improvement, up to 25%, when using scanString!
  (Found while working with Henrik Westlund on his C header file scanner.)

- Updated UML diagrams to reflect latest class/method changes.


Version 1.3 - March, 2005
----------------------------------
- Added new Keyword class, as a special form of Literal.  Keywords
  must be followed by whitespace or other non-keyword characters, to
  distinguish them from variables or other identifiers that just
  happen to start with the same characters as a keyword.  For instance,
  the input string containing "ifOnlyIfOnly" will match a Literal("if")
  at the beginning and in the middle, but will fail to match a
  Keyword("if").  Keyword("if") will match only strings such as "if only"
  or "if(only)". (Proposed by Wolfgang Borgert, and Berteun Damman
  separately requested this on comp.lang.python - great idea!)

- Added setWhitespaceChars() method to override the characters to be
  skipped as whitespace before matching a particular ParseElement.  Also
  added the class-level method setDefaultWhitespaceChars(), to allow
  users to override the default set of whitespace characters (space,
  tab, newline, and return) for all subsequently defined ParseElements.
  (Inspired by Klaas Hofstra's inquiry on the Sourceforge pyparsing
  forum.)

- Added helper parse actions to support some very common parse
  action use cases:
  . replaceWith(replStr) - replaces the matching tokens with the
    provided replStr replacement string; especially useful with
    transformString()
  . removeQuotes - removes first and last character from string enclosed
    in quotes (note - NOT the same as the string strip() method, as only
    a single character is removed at each end)

- Added copy() method to ParseElement, to make it easier to define
  different parse actions for the same basic parse expression.  (Note, copy
  is implicitly called when using setResultsName().)


  (The following changes were posted to CVS as Version 1.2.3 -
  October-December, 2004)

- Added support for Unicode strings in creating grammar definitions.
  (Big thanks to Gavin Panella!)

- Added constant alphas8bit to include the following 8-bit characters:
    ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþ

- Added srange() function to simplify definition of Word elements, using
  regexp-like '[A-Za-z0-9]' syntax.  This also simplifies referencing
  common 8-bit characters.

- Fixed bug in Dict when a single element Dict was embedded within another
  Dict. (Thanks Andy Yates for catching this one!)

- Added 'formatted' argument to ParseResults.asXML().  If set to False,
  suppresses insertion of whitespace for pretty-print formatting.  Default
  equals True for backward compatibility.

- Added setDebugActions() function to ParserElement, to allow user-defined
  debugging actions.

- Added support for escaped quotes (either in \', \", or doubled quote
  form) to the predefined expressions for quoted strings. (Thanks, Ero
  Carrera!)

- Minor performance improvement (~5%) converting "char in string" tests
  to "char in dict". (Suggested by Gavin Panella, cool idea!)


Version 1.2.2 - September 27, 2004
----------------------------------
- Modified delimitedList to accept an expression as the delimiter, instead
  of only accepting strings.

- Modified ParseResults, to convert integer field keys to strings (to
  avoid confusion with list access).

- Modified Combine, to convert all embedded tokens to strings before
  combining.

- Fixed bug in MatchFirst in which parse actions would be called for
  expressions that only partially match. (Thanks, John Hunter!)

- Fixed bug in fourFn.py example that fixes right-associativity of ^
  operator. (Thanks, Andrea Griffini!)

- Added class FollowedBy(expression), to look ahead in the input string
  without consuming tokens.

- Added class NoMatch that never matches any input. Can be useful in
  debugging, and in very specialized grammars.

- Added example pgn.py, for parsing chess game files stored in Portable
  Game Notation. (Thanks, Alberto Santini!)


Version 1.2.1 - August 19, 2004
-------------------------------
- Added SkipTo(expression) token type, simplifying grammars that only
  want to specify delimiting expressions, and want to match any characters
  between them.

- Added helper method dictOf(key,value), making it easier to work with
  the Dict class. (Inspired by Pavel Volkovitskiy, thanks!).

- Added optional argument listAllMatches (default=False) to
  setResultsName().  Setting listAllMatches to True overrides the default
  modal setting of tokens to results names; instead, the results name
  acts as an accumulator for all matching tokens within the local
  repetition group. (Suggested by Amaury Le Leyzour - thanks!)

- Fixed bug in ParseResults, throwing exception when trying to extract
  slice, or make a copy using [:]. (Thanks, Wilson Fowlie!)

- Fixed bug in transformString() when the input string contains <TAB>'s
  (Thanks, Rick Walia!).

- Fixed bug in returning tokens from un-Grouped And's, Or's and
  MatchFirst's, where too many tokens would be included in the results,
  confounding parse actions and returned results.

- Fixed bug in naming ParseResults returned by And's, Or's, and Match
  First's.

- Fixed bug in LineEnd() - matching this token now correctly consumes
  and returns the end of line "\n".

- Added a beautiful example for parsing Mozilla calendar files (Thanks,
  Petri Savolainen!).

- Added support for dynamically modifying Forward expressions during
  parsing.


Version 1.2 - 20 June 2004
--------------------------
- Added definition for htmlComment to help support HTML scanning and
  parsing.

- Fixed bug in generating XML for Dict classes, in which trailing item was
  duplicated in the output XML.

- Fixed release bug in which scanExamples.py was omitted from release
  files.

- Fixed bug in transformString() when parse actions are not defined on the
  outermost parser element.

- Added example urlExtractor.py, as another example of using scanString
  and parse actions.


Version 1.2beta3 - 4 June 2004
------------------------------
- Added White() token type, analogous to Word, to match on whitespace
  characters.  Use White in parsers with significant whitespace (such as
  configuration file parsers that use indentation to indicate grouping).
  Construct White with a string containing the whitespace characters to be
  matched.  Similar to Word, White also takes optional min, max, and exact
  parameters.

- As part of supporting whitespace-signficant parsing, added parseWithTabs()
  method to ParserElement, to override the default behavior in parseString
  of automatically expanding tabs to spaces.  To retain tabs during
  parsing, call parseWithTabs() before calling parseString(), parseFile() or
  scanString(). (Thanks, Jean-Guillaume Paradis for catching this, and for
  your suggestions on whitespace-significant parsing.)

- Added transformString() method to ParseElement, as a complement to
  scanString().  To use transformString, define a grammar and attach a parse
  action to the overall grammar that modifies the returned token list.
  Invoking transformString() on a target string will then scan for matches,
  and replace the matched text patterns according to the logic in the parse
  action.  transformString() returns the resulting transformed string.
  (Note: transformString() does *not* automatically expand tabs to spaces.)
  Also added scanExamples.py to the examples directory to show sample uses of
  scanString() and transformString().

- Removed group() method that was introduced in beta2.  This turns out NOT to
  be equivalent to nesting within a Group() object, and I'd prefer not to sow
  more seeds of confusion.

- Fixed behavior of asXML() where tags for groups were incorrectly duplicated.
  (Thanks, Brad Clements!)

- Changed beta version message to display to stderr instead of stdout, to
  make asXML() easier to use.  (Thanks again, Brad.)


Version 1.2beta2 - 19 May 2004
------------------------------
- *** SIMPLIFIED API *** - Parse actions that do not modify the list of tokens
  no longer need to return a value.  This simplifies those parse actions that
  use the list of tokens to update a counter or record or display some of the
  token content; these parse actions can simply end without having to specify
  'return toks'.

- *** POSSIBLE API INCOMPATIBILITY *** - Fixed CaselessLiteral bug, where the
  returned token text was not the original string (as stated in the docs),
  but the original string converted to upper case.  (Thanks, Dang Griffith!)
  **NOTE: this may break some code that relied on this erroneous behavior.
  Users should scan their code for uses of CaselessLiteral.**

- *** POSSIBLE CODE INCOMPATIBILITY *** - I have renamed the internal
  attributes on ParseResults from 'dict' and 'list' to '__tokdict' and
  '__toklist', to avoid collisions with user-defined data fields named 'dict'
  and 'list'.  Any client code that accesses these attributes directly will
  need to be modified.  Hopefully the implementation of methods such as keys(),
  items(), len(), etc. on ParseResults will make such direct attribute
  accessess unnecessary.

- Added asXML() method to ParseResults.  This greatly simplifies the process
  of parsing an input data file and generating XML-structured data.

- Added getName() method to ParseResults.  This method is helpful when
  a grammar specifies ZeroOrMore or OneOrMore of a MatchFirst or Or
  expression, and the parsing code needs to know which expression matched.
  (Thanks, Eric van der Vlist, for this idea!)

- Added items() and values() methods to ParseResults, to better support using
  ParseResults as a Dictionary.

- Added parseFile() as a convenience function to parse the contents of an
  entire text file.  Accepts either a file name or a file object.  (Thanks
  again, Dang!)

- Added group() method to And, Or, and MatchFirst, as a short-cut alternative
  to enclosing a construct inside a Group object.

- Extended fourFn.py to support exponentiation, and simple built-in functions.

- Added EBNF parser to examples, including a demo where it parses its own
  EBNF!  (Thanks to Seo Sanghyeon!)

- Added Delphi Form parser to examples, dfmparse.py, plus a couple of
  sample Delphi forms as tests.  (Well done, Dang!)

- Another performance speedup, 5-10%, inspired by Dang!  Plus about a 20%
  speedup, by pre-constructing and cacheing exception objects instead of
  constructing them on the fly.

- Fixed minor bug when specifying oneOf() with 'caseless=True'.

- Cleaned up and added a few more docstrings, to improve the generated docs.


Version 1.1.2 - 21 Mar 2004
---------------------------
- Fixed minor bug in scanString(), so that start location is at the start of
  the matched tokens, not at the start of the whitespace before the matched
  tokens.

- Inclusion of HTML documentation, generated using Epydoc.  Reformatted some
  doc strings to better generate readable docs. (Beautiful work, Ed Loper,
  thanks for Epydoc!)

- Minor performance speedup, 5-15%

- And on a process note, I've used the unittest module to define a series of
  unit tests, to help avoid the embarrassment of the version 1.1 snafu.


Version 1.1.1 - 6 Mar 2004
--------------------------
- Fixed critical bug introduced in 1.1, which broke MatchFirst(!) token
  matching.
  **THANK YOU, SEO SANGHYEON!!!**

- Added "from future import __generators__" to permit running under
  pre-Python 2.3.

- Added example getNTPservers.py, showing how to use pyparsing to extract
  a text pattern from the HTML of a web page.


Version 1.1 - 3 Mar 2004
-------------------------
- ***Changed API*** - While testing out parse actions, I found that the value
  of loc passed in was not the starting location of the matched tokens, but
  the location of the next token in the list.  With this version, the location
  passed to the parse action is now the starting location of the tokens that
  matched.

  A second part of this change is that the return value of parse actions no
  longer needs to return a tuple containing both the location and the parsed
  tokens (which may optionally be modified); parse actions only need to return
  the list of tokens.  Parse actions that return a tuple are deprecated; they
  will still work properly for conversion/compatibility, but this behavior will
  be removed in a future version.

- Added validate() method, to help diagnose infinite recursion in a grammar tree.
  validate() is not 100% fool-proof, but it can help track down nasty infinite
  looping due to recursively referencing the same grammar construct without some
  intervening characters.

- Cleaned up default listing of some parse element types, to more closely match
  ordinary BNF.  Instead of the form <classname>:[contents-list], some changes
  are:
  . And(token1,token2,token3) is "{ token1 token2 token3 }"
  . Or(token1,token2,token3) is "{ token1 ^ token2 ^ token3 }"
  . MatchFirst(token1,token2,token3) is "{ token1 | token2 | token3 }"
  . Optional(token) is "[ token ]"
  . OneOrMore(token) is "{ token }..."
  . ZeroOrMore(token) is "[ token ]..."

- Fixed an infinite loop in oneOf if the input string contains a duplicated
  option. (Thanks Brad Clements)

- Fixed a bug when specifying a results name on an Optional token. (Thanks
  again, Brad Clements)

- Fixed a bug introduced in 1.0.6 when I converted quotedString to use
  CharsNotIn; I accidentally permitted quoted strings to span newlines.  I have
  fixed this in this version to go back to the original behavior, in which
  quoted strings do *not* span newlines.

- Fixed minor bug in HTTP server log parser. (Thanks Jim Richardson)


Version 1.0.6 -  13 Feb 2004
----------------------------
- Added CharsNotIn class (Thanks, Lee SangYeong).  This is the opposite of
  Word, in that it is constructed with a set of characters *not* to be matched.
  (This enhancement also allowed me to clean up and simplify some of the
  definitions for quoted strings, cStyleComment, and restOfLine.)

- **MINOR API CHANGE** - Added joinString argument to the __init__ method of
  Combine (Thanks, Thomas Kalka).  joinString defaults to "", but some
  applications might choose some other string to use instead, such as a blank
  or newline.  joinString was inserted as the second argument to __init__,
  so if you have code that specifies an adjacent value, without using
  'adjacent=', this code will break.

- Modified LineStart to recognize the start of an empty line.

- Added optional caseless flag to oneOf(), to create a list of CaselessLiteral
  tokens instead of Literal tokens.

- Added some enhancements to the SQL example:
  . Oracle-style comments (Thanks to Harald Armin Massa)
  . simple WHERE clause

- Minor performance speedup - 5-15%


Version 1.0.5 -  19 Jan 2004
----------------------------
- Added scanString() generator method to ParseElement, to support regex-like
  pattern-searching

- Added items() list to ParseResults, to return named results as a
  list of (key,value) pairs

- Fixed memory overflow in asList() for deeply nested ParseResults (Thanks,
  Sverrir Valgeirsson)

- Minor performance speedup - 10-15%


Version 1.0.4 -  8 Jan 2004
---------------------------
- Added positional tokens StringStart, StringEnd, LineStart, and LineEnd

- Added commaSeparatedList to pre-defined global token definitions; also added
  commasep.py to the examples directory, to demonstrate the differences between
  parsing comma-separated data and simple line-splitting at commas

- Minor API change: delimitedList does not automatically enclose the
  list elements in a Group, but makes this the responsibility of the caller;
  also, if invoked using 'combine=True', the list delimiters are also included
  in the returned text (good for scoped variables, such as a.b.c or a::b::c, or
  for directory paths such as a/b/c)

- Performance speed-up again, 30-40%

- Added httpServerLogParser.py to examples directory, as this is
  a common parsing task


Version 1.0.3 - 23 Dec 2003
---------------------------
- Performance speed-up again, 20-40%

- Added Python distutils installation setup.py, etc. (thanks, Dave Kuhlman)


Version 1.0.2 - 18 Dec 2003
---------------------------
- **NOTE: Changed API again!!!** (for the last time, I hope)

  + Renamed module from parsing to pyparsing, to better reflect Python
    linkage.

- Also added dictExample.py to examples directory, to illustrate
  usage of the Dict class.


Version 1.0.1 - 17 Dec 2003
---------------------------
- **NOTE:  Changed API!**

  + Renamed 'len' argument on Word.__init__() to 'exact'

- Performance speed-up, 10-30%


Version 1.0.0 - 15 Dec 2003
---------------------------
- Initial public release

Version 0.1.1 thru 0.1.17 - October-November, 2003
--------------------------------------------------
- initial development iterations:
    - added Dict, Group
    - added helper methods oneOf, delimitedList
    - added helpers quotedString (and double and single), restOfLine, cStyleComment
    - added MatchFirst as an alternative to the slower Or
    - added UML class diagram
    - fixed various logic bugs
