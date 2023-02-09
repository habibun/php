## Articles
- [Discovering the Domain Architecture](https://www.microsoftpressstore.com/articles/article.aspx?p=2248811)
- [The absolute beginner's guide to Domain Driven Design with Symfony](https://www.youtube.com/watch?v=pfMGgd_NDPc)
- [DDD & REST - Domain Driven APIs for the Web  ](https://www.youtube.com/watch?v=1RgXgZcj5nM)
  - [Download slides](http://gotocon.com/berlin-2015/presentation/DDD%20&%20REST%20-%20Domain%20Driven%20APIs%20for%20the%20Web)
- [When and where to determine the ID of an entity](https://matthiasnoback.nl/2018/05/when-and-where-to-determine-the-id-of-an-entity/)
- [The absolute beginner’s guide to DDD with Symfony](https://speakerdeck.com/nealio82/the-absolute-beginners-guide-to-ddd-with-symfony)
- [Domain-driven-design](https://vaadin.com/blog/tag/domain-driven-design)
- [My review of the book "DDD in PHP"](https://www.linkedin.com/pulse/my-review-book-ddd-php-roman-dykyi)
- [Is it a DTO or a Value Object?](https://matthiasnoback.nl/2022/09/is-it-a-dto-or-a-value-object/) by Matthias Noback
- [Money pattern](https://martinfowler.com/eaaCatalog/money.html) - [money php library](https://github.com/moneyphp/money)
- [Data Mapper](https://www.martinfowler.com/eaaCatalog/dataMapper.html) by Martin Fowler
- [What I learned from DDD. Basic concepts](https://latteandcode.medium.com/chapter-1-what-i-learned-from-ddd-basic-concepts-db887c397599) by Gerardo Fernández
- 


## Example applications
[Hexagonal Architecture + DDD + CQRS in PHP using Symfony 6](https://github.com/CodelyTV/php-ddd-example) by CodelyTV  
[Last Wishes](https://github.com/dddshelf/last-wishes) by DDD Shelf  
[blog-cqrs](https://github.com/dddshelf/blog-cqrs) by DDD Shelf  
[last-wishes-gamify](https://github.com/dddshelf/last-wishes-gamify) by DDD Shelf  
[absolute-beginners-guide-to-ddd-with-symfony](https://github.com/nealio82/absolute-beginners-guide-to-ddd-with-symfony) by Neal Brooks  
[DDD CQRS ADR PHP Symfony example](https://github.com/ferrius/ddd-cqrs-example) by Serge  
[ddd-playground](https://github.com/jorge07/ddd-playground) by Jorge Arco  
[php-ddd-cargo-sample](https://github.com/codeliner/php-ddd-cargo-sample) by Alexander Miertsch  
[Symfony 5 DDD ES CQRS backend boilerplate](https://github.com/jorge07/symfony-5-es-cqrs-boilerplate) by Alexander Miertsch  
[symfony-ddd-example](https://github.com/salletti/symfony-ddd-example) by salletti


## Testing
- [Domain-Driven Design & Unit Tests](https://www.jamesmichaelhickey.com/ddd-unit-tests/)
- [DDD & Testing Strategy](http://www.taimila.com/blog/ddd-and-testing-strategy/)


## Books
Domain-Driven Design in PHP By Carlos Buenosvinos , Christian Soronellas , Keyvan Akbary


## Domain Driven Design In A Nutshell ###  
Domain-Driven Design (DDD), is an
approach that helps us succeed in understanding and building software model designs. It
provides us with strategic and tactical modeling tools to aid designing high-quality software
that meets our business goals.

## Three Pillars ###
- [Ubiquitous Language](docs/UbiquitousLanguage.md)
- [Strategic Design](docs/StrategicDesign.md)
- [Tactical Design](docs/TacticalDesign.md)


## Ubiquitous Language  
'Ubiquitous Language' is the language that is used by business experts to describe the Domain Model.
It means that the development team uses the language consistently in all communications, and also in the code.
This language should be based on the Domain Model


## Event Storming  
Event Storming is a workshop format for quickly exploring complex business domains.  

[More](docs/EventStorming.md)



## Domain
The subject area to which the user applies a program is the domain of the software.
It is also termed as sphere of knowledge.


## Subdomain 
Domain-Driven Design uses Domains and Subdomains to group and organize what companies want to solve.
[More](docs/Subdomain.md)


## Domain Model  

- [Domain-driven design practice — Modelling the payments system](https://medium.com/airwallex-engineering/domain-driven-design-practice-modeling-payments-system-f7bc5cf64bb3) 

[More](docs/DomainModel.md) 


## Domain Expert   
Domain expert is a person who is an owner in a particular area or topic.


## Hexagonal Architecture  
- https://www.youtube.com/watch?v=K1EJBmwg9EQ


## Bounded context  
**[More](docs/BoundedContext.md)**


## Context map  
**[More](docs/ContextMap.md)** 


## Entity  
An object that can be identified uniquely or by its identifier. Entity can be identified either by its ids or combination of some attributes. Entity is an identity.

- [DDD and your database by Matthias Noback](https://matthiasnoback.nl/2020/05/ddd-and-your-database)

[More](docs/Entity.md) 


## Event Sourcing  
- [Event Sourcing](https://martinfowler.com/eaaDev/EventSourcing.html) by Martin Fowler

[More](docs/EventSourcing.md)



## Value Object  
An object that contains attributes but has no conceptual identity.

Examples of Value Objects are numbers, text strings, dates, times, a person's full name
(composed of first name, middle name, last name, and title), currencies, colors, phone
numbers, and postal addresses.  
[More](docs/ValueObject.md)


## Aggregate  
A collection of objects that are bound together by a root entity, otherwise known as an aggregate root.
The aggregate root guarantees the consistency of changes being made within the aggregate by forbidding external objects from holding references to its members.
The idea of an aggregate is to guarantee consistency, being the root responsible for data integrity and forcing invariants.
[More](docs/Aggregate.md)

- [DDD_Aggregate by Martin Fowler](https://martinfowler.com/bliki/DDD_Aggregate.html)
- [Doctrine ORM and DDD aggregates by Matthias Noback](https://matthiasnoback.nl/2018/06/doctrine-orm-and-ddd-aggregates/)
- [Aggregate Fields](https://www.doctrine-project.org/projects/doctrine-orm/en/2.11/cookbook/aggregate-fields.html#aggregate-fields)


## Domain Event  
A domain object that defines an event (something that happens) and is an event that domain experts care about.


## Service  
Services can be categorized into three types in domain driven design.

Services can be of three types:  

    - Domain Services
    - Application Services
    - Infrastructure Services
[More](docs/Service.md)


## Layer  
Layered Architecture is the idea of isolation of each part based on years of experience and convention.
[More](docs/LayeredArchitecture.md)


## Anti-corruption layers  
[More](docs/AntiCorruptionLayer.md)


## Factories 
Factories are used to encapsulate the knowledge necessary for object creation, and they are especially useful to create Aggregates.


## Repository 
A Repository is basically a layer that sits between your project’s domain and the database



## Modules 
When you place some classes together in a Module, you are telling the next developer who looks at your design to think about them together.
If your model is telling a story, the Modules are chapters.

