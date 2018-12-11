<?php

/*
The Abstract Factory Pattern

Provide an interface for creating families of related or dependent objects
without specifying their concrete classes.

The Abstract Factory pattern is very similar to the Factory Method pattern.

The main difference between the two is that with the Abstract Factory
pattern, a class delegates the responsibility of object instantiation to another
object via composition whereas the Factory Method pattern uses
inheritance and relies on a subclass to handle the desired object
instantiation

Actually, the delegated object frequently uses factory methods to perform
the instantiation!

Applicability
    Use the Abstract Factory pattern in any of the following situations:
    A system should be independent of how its products are created,
composed, and represented
    A class can't anticipate the class of objects it must create
    A system must use just one of a set of families of products
    A family of related product objects is designed to be used together, and you
need to enforce this constraint

Consequences:
    Benefits:
        › Isolates clients from concrete implementation classes
        › Makes exchanging product families easy, since a particular concrete factory
          can support a complete family of products
        › Enforces the use of products only from one family
    Liabilities
        › Supporting new kinds of products requires changing the AbstractFactory
          interface
Implementation Issues
    How many instances of a particular concrete factory should there be?
        › An application typically only needs a single instance of a particular concrete
          factory
        › Use the Singleton pattern for this purpose
*/