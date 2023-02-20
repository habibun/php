# Command–query separation (CQS)
> Asking a question should not change the answer.

    - Bertrand Meyer

## summary
- Commands change the state of the system but don’t return anything. If command fails, throws an exception.
- Queries return a value and don’t change the state of the system.