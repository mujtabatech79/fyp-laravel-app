<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevopsFinalProjectController extends Controller
{
    public function index()
    {
        // Group Members Information
        $groupMembers = [
            [
                'name' => 'Mujtaba Nawaz',
                'roll_no' => 'FA22-BSE-023'
            ],
            [
                'name' => 'Ali Hassan',
                'roll_no' => 'FA22-BSE-031'
            ]
        ];

        // Tools Covered in Project - ALL COMPLETED
        $tools = [
            [
                'name' => 'Git & GitHub',
                'icon' => 'fab fa-github',
                'color' => 'primary',
                'status' => 'completed',
                'implementation_date' => 'May 15, 2026',
                'description' => 'Version control system for source code management',
                'commands' => ['git init', 'git add .', 'git commit -m', 'git push origin main']
            ],
            [
                'name' => 'Docker',
                'icon' => 'fab fa-docker',
                'color' => 'info',
                'status' => 'completed',
                'implementation_date' => 'May 15, 2026',
                'description' => 'Containerization platform for application packaging',
                'commands' => ['docker build -t', 'docker run -d -p', 'docker ps', 'docker push']
            ],
            [
                'name' => 'AWS ECR',
                'icon' => 'fas fa-cloud-upload-alt',
                'color' => 'warning',
                'status' => 'completed',
                'implementation_date' => 'May 16, 2026',
                'description' => 'Elastic Container Registry for Docker images',
                'commands' => ['aws ecr create-repository', 'docker tag', 'docker push']
            ],
            [
                'name' => 'Jenkins CI/CD',
                'icon' => 'fas fa-robot',
                'color' => 'danger',
                'status' => 'completed',
                'implementation_date' => 'May 16, 2026',
                'description' => 'Automation server for CI/CD pipeline',
                'commands' => ['pipeline script', 'webhook setup', 'build triggers']
            ],
            [
                'name' => 'Kubernetes (K8s)',
                'icon' => 'fas fa-cubes',
                'color' => 'success',
                'status' => 'completed',
                'implementation_date' => 'May 17, 2026',
                'description' => 'Container orchestration platform',
                'commands' => ['kubectl apply', 'kubectl get pods', 'kubectl expose deployment']
            ],
            [
                'name' => 'Terraform',
                'icon' => 'fas fa-code-branch',
                'color' => 'secondary',
                'status' => 'completed',
                'implementation_date' => 'May 17, 2026',
                'description' => 'Infrastructure as Code (IaC)',
                'commands' => ['terraform init', 'terraform plan', 'terraform apply']
            ],
            [
                'name' => 'Ansible',
                'icon' => 'fas fa-play-circle',
                'color' => 'dark',
                'status' => 'completed',
                'implementation_date' => 'May 18, 2026',
                'description' => 'Configuration management & automation',
                'commands' => ['ansible-playbook', 'ansible-inventory', 'ansible all -m']
            ],
            [
                'name' => 'Grafana & Prometheus',
                'icon' => 'fas fa-chart-line',
                'color' => 'warning',
                'status' => 'completed',
                'implementation_date' => 'May 18, 2026',
                'description' => 'Monitoring & visualization stack',
                'commands' => ['grafana-server', 'prometheus config', 'dashboard creation']
            ]
        ];

        $totalTools = count($tools);
        $completedTools = collect($tools)->where('status', 'completed')->count();
        $progress = ($completedTools / $totalTools) * 100;

        return view('devops-final-project', compact('tools', 'groupMembers', 'totalTools', 'completedTools', 'progress'));
    }
}