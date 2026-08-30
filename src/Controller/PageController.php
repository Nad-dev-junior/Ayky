<?php

namespace Ayky\Controller;

use Ayky\Model\Repository\JobRepository;


class PageController  extends Controller
{

   public function home(): void
   {
      $this->render("pages/home");
   }

   public function contact(): void
   {
      $this->render("pages/contact");
   }

   public function jobs(): void
   {
      $jobRepository = new JobRepository();
      $jobs = $jobRepository->findAll();


      $this->render("pages/jobs", [
         "jobs" => $jobs

      ]);
   }


   public function jobDetail(int $id): void
   {
      $jobRepository = new JobRepository();
      $job = $jobRepository->findById($id);

      $this->render("pages/details", [
         "job" => $job
      ]);
   }

   public function filter()
   {
      header('Content-Type: application/json');
      $category = $_GET['category'];

      $jobRepository = new JobRepository();
      if ($category == "Tous") {
         $jobs = $jobRepository->findAll();
      } else {
         $jobs = $jobRepository->findByCategory($category);
      }


      $jobsArray = [];
      foreach ($jobs as $job) {
         $jobData =  [
            "title" => $job->getTitle(),
            "salary" => $job->getSalary(),
            "description" => $job->getDescription(),
            "countryId" => $job->getCountryId(),
            "companyId" => $job->getCompanyId(),
            "companyName" => $job->getCompanyName(),
            "countryName" => $job->getCountryName(),

         ];
         $jobsArray[] = $jobData;


       
      }
        echo json_encode($jobsArray);
   }
   public function search()
   {
      header('Content-Type: application/json');
      $search = $_GET['search'];

      $jobRepository = new JobRepository();
   $jobs = $jobRepository->search($search) ;
      $jobsArray = [];
      foreach ($jobs as $job) {
         $jobData =  [
            "title" => $job->getTitle(),
            "salary" => $job->getSalary(),
            "description" => $job->getDescription(),
            "countryId" => $job->getCountryId(),
            "companyId" => $job->getCompanyId(),
            "companyName" => $job->getCompanyName(),
            "countryName" => $job->getCountryName(),

         ];
         $jobsArray[] = $jobData;


       
      }
        echo json_encode($jobsArray);
   }
}
