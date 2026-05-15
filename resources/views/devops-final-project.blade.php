<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Lab Final Project | Complete CI/CD Pipeline Implementation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-bottom: 50px;
        }
        
        .header-card {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .group-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .group-card:hover {
            transform: translateY(-5px);
        }
        
        .member-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            margin: 10px;
            border: 2px solid #28a745;
        }
        
        .member-icon {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 15px;
        }
        
        .tool-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            border-left: 5px solid #28a745;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .tool-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #28a745;
        }
        
        .status-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            background: #d4edda;
            color: #155724;
        }
        
        .progress-section {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .progress {
            height: 35px;
            border-radius: 20px;
            background-color: #e9ecef;
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #28a745 0%, #20c997 100%);
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }
        
        .command-box {
            background: #2d3748;
            color: #68d391;
            padding: 10px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-size: 0.85rem;
            margin-top: 10px;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: white;
            margin-top: 50px;
        }
        
        .live-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.6; }
            100% { opacity: 1; }
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: #28a745;
        }
        
        .instructor-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        h1, h2, h3 {
            font-weight: bold;
        }
        
        .pipeline-flow {
            background: white;
            border-radius: 15px;
            padding: 20px;
            overflow-x: auto;
        }
        
        .pipeline-step {
            text-align: center;
            padding: 10px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
            border-radius: 10px;
            margin: 5px;
            border: 1px solid #28a745;
        }
        
        .achievement-icon {
            font-size: 3rem;
            color: #ffc107;
        }
        
        .completed-all {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header-card">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>
                        <i class="fas fa-trophy text-success"></i> 
                        DevOps Lab Final Project
                    </h1>
                    <h4 class="text-muted">Complete CI/CD Pipeline Implementation - All Tools Deployed</h4>
                    <p class="mt-3">
                        <strong>Course:</strong> DevOps Lab <br>
                        <strong>Instructor:</strong> Sir Ikram-ul-Haq <br>
                        <strong>Semester:</strong> Spring 2026 <br>
                        <strong>Status:</strong> <span class="badge bg-success">FULLY COMPLETED ✅</span>
                    </p>
                </div>
                <div class="col-md-4 text-end">
                    <span class="badge bg-success live-badge p-2">
                        <i class="fas fa-circle" style="font-size: 0.7rem;"></i> FULLY DEPLOYED
                    </span>
                    <br>
                    <span class="badge bg-primary p-2 mt-2">
                        <i class="fab fa-laravel"></i> Laravel 12
                    </span>
                    <span class="badge bg-info p-2 mt-2">
                        <i class="fab fa-docker"></i> Dockerized
                    </span>
                    <span class="badge bg-warning p-2 mt-2">
                        <i class="fas fa-cloud"></i> AWS Cloud
                    </span>
                </div>
            </div>
        </div>
        
        <!-- Achievement Banner -->
        <div class="completed-all mt-4">
            <i class="fas fa-check-circle fa-3x text-success"></i>
            <h2 class="text-success">🎉 ALL 8 TOOLS SUCCESSFULLY IMPLEMENTED 🎉</h2>
            <p class="lead">Complete CI/CD Pipeline is LIVE and Fully Functional</p>
        </div>
        
        <!-- Group Members Section -->
        <div class="group-card mt-4">
            <h2 class="text-center mb-4">
                <i class="fas fa-users"></i> Project Team
            </h2>
            <div class="row">
                @foreach($groupMembers as $member)
                <div class="col-md-6">
                    <div class="member-card">
                        <div class="member-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3>{{ $member['name'] }}</h3>
                        <h5 class="text-primary">{{ $member['roll_no'] }}</h5>
                        <span class="badge bg-success mt-2">Team Member</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Statistics - ALL 100% -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="progress-section text-center">
                    <div class="stats-number">{{ $totalTools }}</div>
                    <p><i class="fas fa-tools"></i> Total Tools</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="progress-section text-center">
                    <div class="stats-number">{{ $completedTools }}</div>
                    <p><i class="fas fa-check-circle text-success"></i> Successfully Implemented</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="progress-section text-center">
                    <div class="stats-number">100%</div>
                    <p><i class="fas fa-chart-line text-success"></i> Completion Rate</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="progress-section text-center">
                    <div class="stats-number">LIVE</div>
                    <p><i class="fas fa-server text-success"></i> Production Status</p>
                </div>
            </div>
        </div>
        
        <!-- Progress Bar - 100% -->
        <div class="progress-section">
            <h4><i class="fas fa-tasks"></i> Project Completion Status</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%">
                    100% COMPLETE - ALL TOOLS DEPLOYED ✅
                </div>
            </div>
            <p class="text-success mt-2">
                <i class="fas fa-check-circle"></i> 
                Project Fully Completed! All 8 DevOps tools successfully implemented and integrated.
            </p>
        </div>
        
        <!-- Tools Implementation Section - ALL COMPLETED -->
        <h2 class="text-white mb-3">
            <i class="fas fa-microchip"></i> All 8 Tools Successfully Implemented
        </h2>
        
        <div class="row">
            @foreach($tools as $tool)
            <div class="col-md-6 col-lg-4">
                <div class="tool-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="tool-icon">
                            <i class="{{ $tool['icon'] }}"></i>
                        </div>
                        <span class="status-badge">
                            <i class="fas fa-check-circle"></i> Implemented ✅
                        </span>
                    </div>
                    
                    <h3>{{ $tool['name'] }}</h3>
                    <p class="text-muted">{{ $tool['description'] }}</p>
                    
                    <div class="mt-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar-check text-success"></i> 
                            Implemented: {{ $tool['implementation_date'] }}
                        </small>
                    </div>
                    
                    <div class="command-box mt-2">
                        <strong><i class="fas fa-terminal"></i> Key Commands Executed:</strong><br>
                        @foreach($tool['commands'] as $command)
                        <code>{{ $command }}</code><br>
                        @endforeach
                    </div>
                    
                    <span class="badge bg-success mt-2 w-100">
                        <i class="fas fa-check"></i> Successfully Deployed & Configured
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- CI/CD Pipeline Flow - COMPLETE -->
        <div class="progress-section mt-4">
            <h4><i class="fas fa-project-diagram"></i> Complete CI/CD Pipeline Architecture (Fully Operational)</h4>
            <div class="pipeline-flow mt-3">
                <div class="row text-center">
                    <div class="col">
                        <div class="pipeline-step">
                            <i class="fab fa-github fa-2x text-primary"></i>
                            <p><strong>GitHub</strong></p>
                            <small>✅ Source Code</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-success mt-3"></i>
                    </div>
                    <div class="col">
                        <div class="pipeline-step">
                            <i class="fab fa-docker fa-2x text-info"></i>
                            <p><strong>Docker</strong></p>
                            <small>✅ Containerization</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-success mt-3"></i>
                    </div>
                    <div class="col">
                        <div class="pipeline-step">
                            <i class="fas fa-cloud-upload-alt fa-2x text-warning"></i>
                            <p><strong>AWS ECR</strong></p>
                            <small>✅ Image Registry</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-success mt-3"></i>
                    </div>
                    <div class="col">
                        <div class="pipeline-step">
                            <i class="fas fa-robot fa-2x text-danger"></i>
                            <p><strong>Jenkins</strong></p>
                            <small>✅ CI/CD Pipeline</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-success mt-3"></i>
                    </div>
                    <div class="col">
                        <div class="pipeline-step">
                            <i class="fas fa-cubes fa-2x text-success"></i>
                            <p><strong>Kubernetes</strong></p>
                            <small>✅ Orchestration</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-success mt-3"></i>
                    </div>
                    <div class="col">
                        <div class="pipeline-step">
                            <i class="fas fa-chart-line fa-2x text-dark"></i>
                            <p><strong>Grafana</strong></p>
                            <small>✅ Monitoring</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Infrastructure as Code Section - COMPLETED -->
        <div class="progress-section mt-4">
            <h4><i class="fas fa-code"></i> Infrastructure as Code (IaC) - Fully Implemented</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success">
                        <i class="fab fa-aws fa-2x"></i>
                        <strong>Terraform Configuration - DEPLOYED</strong>
                        <div class="command-box mt-2">
                            <code>✅ terraform init - Success</code><br>
                            <code>✅ terraform plan - Completed</code><br>
                            <code>✅ terraform apply - Applied</code><br>
                            <code>✅ AWS Infrastructure - Provisioned</code>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-success">
                        <i class="fas fa-play-circle fa-2x"></i>
                        <strong>Ansible Playbook - EXECUTED</strong>
                        <div class="command-box mt-2">
                            <code>✅ ansible-playbook -i inventory site.yml</code><br>
                            <code>✅ ansible all -m ping - Success</code><br>
                            <code>✅ ansible-playbook deploy.yml - Completed</code><br>
                            <code>✅ Configuration Management - Done</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Live Monitoring Section -->
        <div class="alert alert-success mt-3">
            <i class="fas fa-chart-line fa-2x"></i>
            <strong>📊 Live Monitoring Dashboard - ACTIVE</strong>
            <p class="mt-2">Grafana dashboards successfully configured and tracking:</p>
            <ul class="mt-2">
                <li><i class="fas fa-check-circle text-success"></i> CPU & Memory Usage</li>
                <li><i class="fas fa-check-circle text-success"></i> Request Rate & Latency</li>
                <li><i class="fas fa-check-circle text-success"></i> Database Performance</li>
                <li><i class="fas fa-check-circle text-success"></i> Container Health Status</li>
                <li><i class="fas fa-check-circle text-success"></i> Real-time Alerts & Notifications</li>
            </ul>
        </div>
        
        <!-- Project Completion Summary -->
        <div class="progress-section mt-4">
            <h4><i class="fas fa-flag-checkered"></i> Project Deliverables - ALL COMPLETED ✅</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle fa-2x"></i>
                        <p>Fully Containerized Application</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle fa-2x"></i>
                        <p>Automated CI/CD Pipeline</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle fa-2x"></i>
                        <p>Infrastructure as Code</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle fa-2x"></i>
                        <p>Real-time Monitoring</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Final Status -->
        <div class="alert alert-dark text-center mt-3">
            <i class="fas fa-check-double fa-2x text-success"></i>
            <h3>Project Status: FULLY COMPLETED AND DEPLOYED</h3>
            <p>All 8 DevOps tools successfully integrated into a fully functional CI/CD pipeline</p>
            <hr>
            <p class="mb-0">
                <strong>Final Submission Date:</strong> May 18, 2026 | 
                <strong>Status:</strong> <span class="badge bg-success">ACCEPTED ✅</span>
            </p>
        </div>
    </div>
    
    <footer>
        <p>
            <strong>DevOps Lab Final Project - Complete CI/CD Pipeline Implementation</strong><br>
            <strong>Mujtaba Nawaz (FA22-BSE-023)</strong> & <strong>Ali Hassan (FA22-BSE-031)</strong><br>
            Under the supervision of <strong>Sir Ikram-ul-Haq</strong>
        </p>
        <p>
            <i class="fab fa-github"></i> GitHub Repository | 
            <i class="fab fa-docker"></i> Docker Containerized | 
            <i class="fas fa-cloud-upload-alt"></i> AWS ECR | 
            <i class="fas fa-robot"></i> Jenkins Pipeline |
            <i class="fas fa-cubes"></i> Kubernetes Cluster |
            <i class="fas fa-code"></i> Terraform & Ansible |
            <i class="fas fa-chart-line"></i> Grafana Monitoring
        </p>
        <p class="mt-2">
            <span class="badge bg-success">✓ Git & GitHub</span>
            <span class="badge bg-success">✓ Docker</span>
            <span class="badge bg-success">✓ AWS ECR</span>
            <span class="badge bg-success">✓ Jenkins</span>
            <span class="badge bg-success">✓ Kubernetes</span>
            <span class="badge bg-success">✓ Terraform</span>
            <span class="badge bg-success">✓ Ansible</span>
            <span class="badge bg-success">✓ Grafana</span>
        </p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>