# command bus
A command is an object that signals an intent, like RegisterUser.
The command is passed to the command bus.
The command bus will pass the command to a handler.
The handler will perform the required actions, like registering the user.


