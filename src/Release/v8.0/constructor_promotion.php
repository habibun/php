<?php
//instead of this
class CustomerDTO {
    public string $name;
    public string $email;
    public \DateTimeImmutable $dob;

    /**
     * @param string $name
     * @param string $email
     * @param DateTimeImmutable $dob
     */
    public function __construct(string $name, string $email, DateTimeImmutable $dob)
    {
        $this->name = $name;
        $this->email = $email;
        $this->dob = $dob;
    }
}


// i would write this
class CustomerDTONew {
    public function __construct(private string $name, private string $email, private DateTimeImmutable $dob)
    {}
}

