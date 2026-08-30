<?php

namespace Ayky\Model\Entities ;

class Job{
    protected int $id ;
    protected string $title ;
    protected string $description;
    protected int $salary;
    protected int $countryId;
    protected int $companyId;
    protected string $companyName;
    protected string $countryName;

    public function getId(): int {
      return  $this->id ;
    }
    public function setId(int $id): void {
         $this->id = $id ;
    }
    public function getTitle():string{
        return $this->title;
    }

  public function setTitle(string $title): void{
      $this-> title = $title ;
  }

  public function getDescription(): string{
   return $this->description ;
}

public function setDescription(string $description): void {
     $this->description = $description ;
}
public function getSalary(): int {
    return $this->salary ;
}

public function setSalary(int $salary) : void {
     $this->salary = $salary ;
}

public function getCountryId(): int {
    return $this->countryId ;
}

public function setCountryId(int $countryId) : void {
     $this->countryId = $countryId ;
}

public function getCompanyId():int {
   return $this->companyId ;
}
public function setCompanyId(int $companyId): void {
     $this->companyId = $companyId ;
}
public function getCompanyName():string {
    return $this->companyName ;
 }
 public function setCompanyName(string $companyName): void {
    $this->companyName = $companyName ;
}
public function getCountryName(): string{
    return $this-> countryName ;
}
public function setCountryName(string $countryName): void{
    $this -> countryName = $countryName ;
}
}

