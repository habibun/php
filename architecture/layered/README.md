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


