<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FypDashboardController extends Controller
{
    public function index()
    {
        // Define all tools and their status
        $tools = [
            [
                'name' => 'Git & GitHub',
                'icon' => 'fab fa-github',
                'color' => 'primary',
                'status' => 'completed',
                'description' => 'Version control and repository hosting',
                'steps' => ['Repository created', 'Code pushed', 'Branch management']
            ],
            [
                'name' => 'Docker',
                'icon' => 'fab fa-docker',
                'color' => 'info',
                'status' => 'completed',
                'description' => 'Containerization platform',
                'steps' => ['Dockerfile created', 'Image built', 'Container running']
            ],
            [
                'name' => 'AWS ECR',
                'icon' => 'fas fa-cloud-upload-alt',
                'color' => 'warning',
                'status' => 'pending',
                'description' => 'Elastic Container Registry',
                'steps' => ['Repository created', 'Image pushed', 'Registry configured']
            ],
            [
                'name' => 'Jenkins',
                'icon' => 'fas fa-robot',
                'color' => 'danger',
                'status' => 'pending',
                'description' => 'CI/CD Automation Server',
                'steps' => ['Jenkins installed', 'Pipeline created', 'Webhook configured']
            ],
            [
                'name' => 'Kubernetes (K8s)',
                'icon' => 'fas fa-cubes',
                'color' => 'success',
                'status' => 'pending',
                'description' => 'Container Orchestration',
                'steps' => ['Deployment.yaml', 'Service created', 'Scaling configured']
            ],
            [
                'name' => 'Terraform & Ansible',
                'icon' => 'fas fa-infinity',
                'color' => 'secondary',
                'status' => 'pending',
                'description' => 'Infrastructure as Code',
                'steps' => ['Terraform scripts', 'Ansible playbooks', 'Automation']
            ],
            [
                'name' => 'Grafana',
                'icon' => 'fas fa-chart-line',
                'color' => 'dark',
                'status' => 'pending',
                'description' => 'Monitoring & Visualization',
                'steps' => ['Dashboard created', 'Metrics configured', 'Alerts setup']
            ]
        ];

        $totalTools = count($tools);
        $completedTools = collect($tools)->where('status', 'completed')->count();
        $progress = ($completedTools / $totalTools) * 100;

        return view('fyp-dashboard', compact('tools', 'totalTools', 'completedTools', 'progress'));
    }
}