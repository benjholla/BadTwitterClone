BadTwitterClone
===============

An insecure website for learning to hack

## Setup

- Expects a MySql Database with the name "badtwitterclone"
- Expects two existings tables

"Tweets"
 - with field "ID" of type "timestamp" defaults to "CURRENT_TIMESTAMP"
 - with field "Username" of type "varchar(50)"
 - with field "Tweet" of type "varchar(140)"

"Users"
 - with field "Username" of type "varchar(50)"
 - with field "Password" of type "varchar(50)"
 - with field "Email" of type "varchar(50)"
