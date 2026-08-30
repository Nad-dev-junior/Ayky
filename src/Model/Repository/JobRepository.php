<?php

namespace Ayky\Model\Repository;

use Ayky\Database\Database;
use Ayky\Model\Entities\Job ;

use PDO;

class JobRepository
{

    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getPdo();
    }

    public function findAll()
    {
        $stmt = $this->pdo->query("SELECT job.id, job.title, job.description ,job.salary, job.country_id, job.company_id,
         company.name AS company_name ,
         country.name AS country_name
         FROM job JOIN company ON job.company_id = company.id
         JOIN country ON job.country_id= country.id ");
         
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $jobs = [];
        foreach ($rows as $row) {
            $job = new Job();
            $job->setId($row['id']);
            $job->setTitle($row['title']);
            $job->setDescription($row['description']);
            $job->setSalary($row['salary']);
            $job->setCountryId($row['country_id']);
            $job->setCompanyId($row['company_id']);
            $job->setCompanyName($row['company_name']);
            $job->setCountryName($row['country_name']);
            $jobs[] = $job;
        }

        return $jobs;
    }

    public function findById(int $id){
        $stmt = $this->pdo->prepare("
        SELECT job.id, job.title, job.description, job.salary, job.country_id, job.company_id, company.name AS company_name, country.name AS country_name FROM job 
        JOIN company on Job.company_id = company.id
        JOIN country ON job.country_id = country.id WHERE job.id = ? ") ;
        $stmt ->bindValue(1 , $id , PDO::PARAM_INT);
        $stmt->execute() ;
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $job = new Job();
        $job->setId($result['id']);
        $job->setTitle($result['title']);
        $job->setDescription($result['description']);
        $job->setSalary($result['salary']);
        $job->setCountryId($result['country_id']);
        $job->setCompanyId($result['company_id']);
        $job->setCompanyName($result['company_name']);
        $job->setCountryName($result['country_name']);

        return $job ;
    }
    public function findByCategory(string $name){
        $stmt= $this->pdo->prepare(" 
            SELECT job.id, job.title, job.description, job.salary, job.country_id, job.company_id, company.name AS company_name, country.name AS country_name FROM job 
            JOIN company ON Job.company_id = company.id
            JOIN job_catgeory  ON job.id =job_catgeory.job_id
            JOIN category  ON category.id = job_catgeory.category_id 
             JOIN country ON job.country_id = country.id WHERE category.name = ?") ; 
        $stmt->bindValue(1, $name , PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $jobs = [];
        foreach($rows as $row){
              $job = new Job();
              $job->setId($row['id']);
              $job->setTitle($row['title']);
              $job->setDescription($row['description']);
              $job->setSalary($row['salary']);
              $job->setCountryId($row['country_id']);
              $job->setCompanyId($row['company_id']);
              $job->setCompanyName($row['company_name']);
              $job->setCountryName($row['country_name']);
        $jobs[] = $job ;
        }
      return $jobs ;
        
 } 
      public function search(string $keyword)
{ 
    $stmt = $this->pdo->prepare("
        SELECT job.id, job.title, job.description, job.salary, job.country_id, job.company_id,
        company.name AS company_name,
        country.name AS country_name
        FROM job
        JOIN company ON job.company_id = company.id
        JOIN country ON job.country_id = country.id
        WHERE job.title LIKE ? OR job.description LIKE ? OR country.name LIKE ?
    ");
    $searchTerm = "%" . $keyword . "%"  ;
    $stmt->bindValue(1, $searchTerm, PDO::PARAM_STR);
    $stmt->bindValue(2, $searchTerm, PDO::PARAM_STR);
    $stmt->bindValue(3, $searchTerm, PDO::PARAM_STR); 
     $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    $jobs = [] ;
    foreach($rows as $row){
        $job = new Job();
        $job->setId($row['id']);
        $job->setTitle($row['title']);
        $job->setDescription($row['description']);
        $job->setSalary($row['salary']);
        $job->setCountryId($row['country_id']);
        $job->setCompanyId($row['company_id']);
        $job->setCompanyName($row['company_name']);
        $job->setCountryName($row['country_name']);
  $jobs[] = $job ;
  }
return $jobs ;
  
    // ajouter companyName
}
}