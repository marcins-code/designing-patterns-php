## Factory method
Factory method id pattern that provide interface to create object in superclass, but allows subclasses
to change type of created objects.

---
### Implementation

1. All products should implement the same interface that declare methods make sense for all products.
2. Create creation abstract class with empty abstract factory method. Return type should be common with product interface.
3. In the creator’s code find all references to product constructors. One by one, replace them with calls to the factory method, 
while extracting the product creation code into the factory method.   

4. Now, create a set of creator subclasses for each type of product listed in the factory method. 
Override the factory method in the subclasses and extract the appropriate bits of construction code from the base method.

5.If there are too many product types, and it does not make sense to create subclasses for all of them, 
you can reuse the control parameter from the base class in subclasses.
