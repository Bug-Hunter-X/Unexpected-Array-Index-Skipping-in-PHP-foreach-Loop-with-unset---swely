# PHP Foreach Loop with unset() Bug

This repository demonstrates a common error in PHP when using the `unset()` function inside a `foreach` loop.  This can lead to unexpected behavior and skipped elements in the array.

The `bug.php` file shows the problematic code. The `bugSolution.php` provides a corrected version demonstrating how to avoid this issue.

The bug stems from the re-indexing of array keys after using `unset()`. The `foreach` loop iterates based on the initial keys, and when a key is removed, subsequent keys might be skipped.  The solution involves iterating in reverse or using a different approach to modify the array during iteration.