# Command query responsibility segregation(CQRS)

**Command query responsibility segregation (CQRS)** applies the CQS principle by using separate Query and Command objects to retrieve and modify data, respectively

**CQRS:**
CQRS means "Command-query responsibility segregation". We segregate the responsibility between commands (write requests) and queries (read requests). The write requests and the read requests are handled by different objects.

That's it. We can further split up the data storage, having separate read and write stores. Once that happens, there may be many read stores, optimized for handling different types of queries or spanning many bounded contexts. Though separate read/write stores are often discussed in relation with CQRS, this is not CQRS itself. CQRS is just the first split of commands and queries.


Originally, CQRS was called "CQS", too. But it was determined that the two are different enough for CQRS to have its own name. The main distinguishing feature is this:
- CQS puts commands and queries in different methods within a type.
- CQRS puts commands and queries on different objects.