BEGIN:VCALENDAR
VERSION
 :2.0
PRODID
 :-//Mozilla.org/NONSGML Mozilla Calendar V1.0//EN
METHOD
 :PUBLISH
BEGIN:VEVENT
UID
 :153ed0e0-1dd2-11b2-9d71-96da104537a4
SUMMARY
 :Test event
DESCRIPTION
 :Some notes
LOCATION
 :Somewhere over the rainbow
CATEGORIES
 :Personal
URL
 :http://personal.amec.fi
STATUS
 :CONFIRMED
CLASS
 :PRIVATE
X
 ;MEMBER=AlarmEmailAddress
 :petri.savolainen@iki.fi
X-MOZILLA-RECUR-DEFAULT-UNITS
 :months
RRULE
 :FREQ=MONTHLY;UNTIL=20040914;INTERVAL=1
EXDATE
 :20040714T000000
DTSTART
 ;VALUE=DATE
 :20040714
DTEND
 ;VALUE=DATE
 :20040815
DTSTAMP
 :20040714T141219Z
LAST-MODIFIED
 :20040714T141457Z
BEGIN:VALARM
TRIGGER
 ;VALUE=DURATION
 :PT15M
END:VALARM
END:VEVENT
END:VCALENDAR
