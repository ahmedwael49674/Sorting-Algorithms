# Insertion-Sort 
## Idea
- Insertion sort algorithm somewhat resembles selection sort. 
- Array is imaginary divided into two parts - sorted one and unsorted one. 
- At the beginning, sorted part contains first element of the array and unsorted one contains the rest. 
- At every step, algorithm takes first element in the unsorted part and inserts it to the right place of the sorted one.
- When unsorted part becomes empty, algorithm stops.

 ## Disadvantage
- this algorithm has complixty of O(n<sup>2</sup>) making it inefficient on large lists but it's better than bubble and selection sorting algorithms