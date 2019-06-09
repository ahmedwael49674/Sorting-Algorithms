# Quick-Sort 
## Idea
- Divide the unsorted list into n sublists, each containing one element (a list of one element is considered sorted).
- Repeatedly merge sublists to produce new sorted sublists until there is only one sublist remaining. This will be the sorted list.
- the algorithm takes O(n log n) comparisons to sort n items. In the worst case, it makes O(n) comparisons, though this behavior is rare