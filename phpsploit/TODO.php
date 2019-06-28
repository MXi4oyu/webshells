Repository:
  * Update shnake dependency (fixes issue #35)

Documentation:
  * Simplify the manpage to summarize only commands and how to get started
  * When all this is done, the 'rtfm' core command can be removed
  * Add autocompletion for `help set <SETTING>` commands

Core:
  * Add a way to get return code of previous command (like bash's '$?')
  * Provide bzip2 payload encoding (php >= 4.0.4, with bzcompress())
    We need smaller payloads !

Interface:
  * BUG: changing terminal size (SIGWINCH) makes readline prompt buggy
    on muliline commands.

Sessions:
  * n/a

Settings:
  * n/a

Commands:
  * Implement HTTP response display in `corectl display-http-requests` command

Plugins:
  * Write a "plugins/network/scan/plugin.py" small ip scanner, to be able to
    progressively gain access on controlled server's internal network.
  * `suirdoot`: handle backward compatibility with previous version, by using
    old behavior when 'SUIDROOT_PIPE' environment variable if defined.

Network Stealth:
  * Write a stealth module which use other target on each command (with 404)
