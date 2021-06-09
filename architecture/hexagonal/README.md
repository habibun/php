# Hexagonal architecture

It aims at creating loosely coupled application components that can be easily connected to their software environment by means of ports and adapters. This makes components exchangeable at any level and facilitates test automation.[1]

### Port
A port like a gateway. It allows the entry or exiting of data to and from the application. In code, this is what we call an interface.

Ports exist in 2 types. You have the inbound and outbound ports.

An **inbound port** defines the exposure of the core’s functionality. These interfaces define how the Core Business Logic can be used. This is the only part of the core exposed to the outside world.

An **outbound port** define the core’s view of the outside world. This are the interface the core need to communicate with the outside world.


### Adapter
There are 2 kind of adapters. Based on this the transformation itself is different.

**Primary Adapters:**
The primary or Driving Adapters represents the UI. This can be our API controllers, Web controllers and views. They are called driving adapters because they drive the application, and start actions in the core application. These adapters can use the inbound ports (interfaces) provided by the core application. The controllers then depends on these interfaces of the core business logic.


**Secondary Adapters:**
The secondary or Driven Adapters represent the connection to your back-end databases, external libraries, mail API’s, etc. These adapters react to actions iniated by the primary adapters. The secondary adapters are implementations of the outbound port. Which in return depend on interfaces of these external libraries and tools to transform them, so the core application can use these without being coupled to them.

