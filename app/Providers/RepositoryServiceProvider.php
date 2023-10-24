<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Dotenv\Repository\RepositoryInterface;
use App\Repository\Doctors\DoctorRepository;
use App\Repository\Finance\PaymentRepository;
use App\Repository\Finance\ReceiptRepository;
use App\Repository\Patients\PatientRepository;
use App\Repository\Sections\SectionRepository;
use App\Repository\Services\ServiceRepository;
use App\Repository\Ambulances\AmbulanceRepository;
use App\Repository\insurances\insuranceRepository;

use App\Repository\doctor_dashboard\RaysRepository;
use App\Interface\Doctors\DoctorRepositoryInterface;
use App\Interface\Finance\PaymentRepositoryInterface;
use App\Interface\Finance\ReceiptRepositoryInterface;
use App\Repository\RayEmployee\RayEmployeeRepository;
use App\Interface\Patients\PatientRepositoryInterface;

use App\Interface\Sections\SectionRepositoryInterface;
use App\Repository\doctor_dashboard\InvoicesRepository;
use App\Repository\doctor_dashboard\DiagnosisRepository;
use App\Interface\Ambulances\AmbulanceRepositoryInterface;
use App\Interface\insurances\insuranceRepositoryInterface;
use App\Interface\doctor_dashboard\RaysRepositoryInterface;
use App\Repository\doctor_dashboard\LaboratoriesRepository;
use App\Interface\Services\SingleServiceRepositoryInterface;
use App\Repository\Dashboard_Ray_Employee\invoiceRepository;
use App\Interface\RayEmployee\RayEmployeeRepositoryInterface;
use App\Interface\doctor_dashboard\InvoicesRepositoryInterface;
use App\Interface\doctor_dashboard\DiagnosisRepositoryInterface;
use App\Interface\doctor_dashboard\LaboratoriesRepositoryInterface;
use App\Interface\Dashboard_Ray_Employee\invoiceRepositoryInterface;
use App\Repository\LaboratorieEmployee\LaboratorieEmployeeRepository;
use App\Interface\LaboratorieEmployee\LaboratorieEmployeeRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(insuranceRepositoryInterface::class, insuranceRepository::class);
        $this->app->bind(AmbulanceRepositoryInterface::class, AmbulanceRepository::class);
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->bind(ReceiptRepositoryInterface::class, ReceiptRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(InvoicesRepositoryInterface::class, InvoicesRepository::class);
        $this->app->bind(DiagnosisRepositoryInterface::class, DiagnosisRepository::class);
        $this->app->bind(RaysRepositoryInterface::class, RaysRepository::class);
        $this->app->bind(LaboratoriesRepositoryInterface::class, LaboratoriesRepository::class);
        $this->app->bind(RayEmployeeRepositoryInterface::class, RayEmployeeRepository::class);

        //Dashboard_Ray_Employee
        $this->app->bind(invoiceRepositoryInterface::class, invoiceRepository::class);

        $this->app->bind(LaboratorieEmployeeRepositoryInterface::class,LaboratorieEmployeeRepository::class);
        //Dashboard_Laboratorie_Employee
        $this->app->bind('App\Interface\Dashboard_Laboratorie_Employee\InvoicesRepositoryInterface',
            'App\Repository\Dashboard_Laboratorie_Employee\InvoicesRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
