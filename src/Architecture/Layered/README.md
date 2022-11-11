# Layered Architecture

Layered architecture is all about the organization of code for the separation of concerns. Each layer contains objects related to a particular concern.

In a Layered system each layer depends on the layers beneath it. A layer should have no knowledge about any layer above it.

### Layering
**Domain**
The Domain or Business Logic Layer is the core of your system. All your business models and services are defined here. This layer holds the rules and logic of the business.

**Application**
This layer is responsible for are meaningful to the business or necessary for interaction with the application layers of other systems. 

**Presentation**
The Presentation or UI layer are your views, templates, controllers and forms. This is the interface to the outside world. Here we provide the interface for the users. 

**Infrastructure**
The infrastructure layer holds the lowest level code. The interactions with a database or an outside service like emails or messaging queues (sending the actual queue or email).


---
**The infrastructure layer**  
Web controllers  
CLI commands  
Write and read model repository implementations  
Services that connect to external systems, like a remote API, or the file
system  
Services that use the current time or generate random data  

--- 
**The application layer:**  
The application layer is the first layer that’s free of infrastructure code. This
layer includes:
Application services/command handlers, and command DTOs  
View model repository interfaces, and view model DTOs  
Event subscribers that listen to domain events and perform secondary tasks  
Interfaces for infrastructure services  

Looking at the classes in the application layer you should be able to recognize:  
What actors can do with your application and what data an actor has to
provide for each task (represented by the application services and their
method parameters, which could be command DTOs).  
What an actor can learn from your application (represented by the view
model repository interfaces and the view model objects).  
How different use cases are connected to each other (represented by the
event subscribers).  
On which things in the outside world your use cases depend (represented by
the interfaces for infrastructure services).

---
**The domain layer:**  
The domain layer is also a layer without any infrastructure code. It contains:  
Entities  
Value objects  
Domain events  
Entity (write model) repository interfaces  
Domain services  

These domain objects should be considered implementation details of the
application layer. In fact, most of these details should stay behind the application
layer. The infrastructure layer generally shouldn’t be concerned with anything
that’s going on in the domain layer. Infrastructure code, like a web controller,
should mainly have to deal with primitive-type data (or DTOs containing
primitive-type data) when it communicates with the application layer. The
application layer will use code from the domain layer to perform its task, and it
will know about the rich domain objects it contains.  

---
**NOTE**

1. Core code doesn’t directly depend on external systems, nor does it
   depend on code written for interacting with a specific type of external
   system. 2. Core code doesn’t need a specific environment to run in, nor
   does it have dependencies that are designed to run in a specific context
   only.