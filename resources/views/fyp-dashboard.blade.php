<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FYP CI/CD Pipeline Dashboard | Laravel DevOps Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .dashboard-header {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .tool-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border-left: 5px solid;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .tool-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .status-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .status-completed {
            background: #d4edda;
            color: #155724;
        }
        
        .status-pending {
            background: #f8d7da;
            color: #721c24;
        }
        
        .progress-section {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .progress {
            height: 30px;
            border-radius: 15px;
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .step-list {
            list-style: none;
            padding-left: 0;
            margin-top: 15px;
        }
        
        .step-list li {
            padding: 5px 0;
            font-size: 0.9rem;
        }
        
        .step-list li i {
            margin-right: 10px;
        }
        
        h1, h2 {
            font-weight: bold;
        }
        
        .live-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #667eea;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="dashboard-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="fas fa-rocket text-primary"></i> FYP CI/CD Pipeline Dashboard</h1>
                    <p class="lead">Complete DevOps Pipeline Implementation with 7 Modern Tools</p>
                    <p class="text-muted">
                        <i class="fas fa-map-marker-alt"></i> Live Demo | 
                        <i class="fas fa-calendar"></i> {{ date('F j, Y') }} | 
                        <i class="fas fa-chart-line"></i> Real-time Progress Tracking
                    </p>
                </div>
                <div class="col-md-4 text-end">
                    <span class="badge bg-success live-badge">
                        <i class="fas fa-circle" style="font-size: 0.7rem;"></i> LIVE DEMO
                    </span>
                    <br>
                    <span class="badge bg-primary mt-2">
                        <i class="fab fa-laravel"></i> Laravel 12
                    </span>
                </div>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">{{ $totalTools }}</div>
                    <p><i class="fas fa-tools"></i> Total Tools</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">{{ $completedTools }}</div>
                    <p><i class="fas fa-check-circle text-success"></i> Completed</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">{{ $totalTools - $completedTools }}</div>
                    <p><i class="fas fa-hourglass-half text-warning"></i> In Progress</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">{{ round($progress) }}%</div>
                    <p><i class="fas fa-chart-line"></i> Overall Progress</p>
                </div>
            </div>
        </div>
        
        <!-- Progress Bar -->
        <div class="progress-section">
            <h4><i class="fas fa-tasks"></i> Project Completion Progress</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%">
                    {{ round($progress) }}% Complete
                </div>
            </div>
            <p class="text-muted mt-2">
                <i class="fas fa-info-circle"></i> 
                We are systematically implementing each tool in our CI/CD pipeline
            </p>
        </div>
        
        <!-- Tools Grid -->
        <div class="row">
            @foreach($tools as $tool)
            <div class="col-md-6 col-lg-4">
                <div class="tool-card" style="border-left-color: {{ $tool['status'] == 'completed' ? '#28a745' : '#dc3545' }}">
                    <div class="tool-icon">
                        <i class="{{ $tool['icon'] }}" style="color: {{ $tool['status'] == 'completed' ? '#28a745' : '#6c757d' }}"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>{{ $tool['name'] }}</h3>
                        <span class="status-badge status-{{ $tool['status'] }}">
                            <i class="fas {{ $tool['status'] == 'completed' ? 'fa-check-circle' : 'fa-clock' }}"></i>
                            {{ ucfirst($tool['status']) }}
                        </span>
                    </div>
                    <p class="text-muted">{{ $tool['description'] }}</p>
                    
                    <div class="step-list">
                        <strong><i class="fas fa-list"></i> Implementation Steps:</strong>
                        <ul class="mt-2">
                            @foreach($tool['steps'] as $step)
                            <li>
                                <i class="fas {{ $tool['status'] == 'completed' ? 'fa-check-circle text-success' : 'fa-circle text-muted' }}"></i>
                                {{ $step }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    @if($tool['status'] == 'completed')
                    <span class="badge bg-success mt-2">
                        <i class="fas fa-check"></i> Completed Successfully
                    </span>
                    @else
                    <span class="badge bg-warning mt-2">
                        <i class="fas fa-spinner fa-spin"></i> Next in Pipeline
                    </span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pipeline Flow Diagram -->
        <div class="progress-section mt-4">
            <h4><i class="fas fa-project-diagram"></i> CI/CD Pipeline Flow</h4>
            <div class="row text-center mt-3">
                <div class="col">
                    <div class="p-2">
                        <i class="fab fa-github fa-2x text-primary"></i>
                        <p>GitHub</p>
                    </div>
                </div>
                <div class="col">
                    <i class="fas fa-arrow-right fa-2x text-muted"></i>
                </div>
                <div class="col">
                    <div class="p-2">
                        <i class="fab fa-docker fa-2x text-info"></i>
                        <p>Docker</p>
                    </div>
                </div>
                <div class="col">
                    <i class="fas fa-arrow-right fa-2x text-muted"></i>
                </div>
                <div class="col">
                    <div class="p-2">
                        <i class="fas fa-cloud-upload-alt fa-2x text-warning"></i>
                        <p>AWS ECR</p>
                    </div>
                </div>
                <div class="col">
                    <i class="fas fa-arrow-right fa-2x text-muted"></i>
                </div>
                <div class="col">
                    <div class="p-2">
                        <i class="fas fa-robot fa-2x text-danger"></i>
                        <p>Jenkins</p>
                    </div>
                </div>
                <div class="col">
                    <i class="fas fa-arrow-right fa-2x text-muted"></i>
                </div>
                <div class="col">
                    <div class="p-2">
                        <i class="fas fa-cubes fa-2x text-success"></i>
                        <p>K8s</p>
                    </div>
                </div>
                <div class="col">
                    <i class="fas fa-arrow-right fa-2x text-muted"></i>
                </div>
                <div class="col">
                    <div class="p-2">
                        <i class="fas fa-chart-line fa-2x text-dark"></i>
                        <p>Grafana</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tech Stack -->
        <div class="progress-section">
            <h4><i class="fas fa-code"></i> Technology Stack</h4>
            <div class="row">
                <div class="col-md-3">
                    <span class="badge bg-primary p-2">Laravel 12</span>
                </div>
                <div class="col-md-3">
                    <span class="badge bg-info p-2">PHP 8.2</span>
                </div>
                <div class="col-md-3">
                    <span class="badge bg-success p-2">MySQL</span>
                </div>
                <div class="col-md-3">
                    <span class="badge bg-warning p-2">Docker</span>
                </div>
            </div>
        </div>
        
        <!-- Live Info -->
        <div class="alert alert-info mt-3">
            <i class="fas fa-info-circle"></i>
            <strong>Live Deployment Info:</strong> This dashboard is running inside a Docker container!
            The page automatically updates as we progress through each tool.
        </div>
    </div>
    
    <footer>
        <p>FYP CI/CD Pipeline Project | Built with Laravel, Docker, and DevOps Tools</p>
        <p>
            <i class="fab fa-github"></i> GitHub Repository | 
            <i class="fab fa-docker"></i> Docker Hub | 
            <i class="fas fa-chart-line"></i> Monitoring Active
        </p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Auto-refresh to show real-time updates (optional)
        setTimeout(function() {
            location.reload();
        }, 30000); // Refresh every 30 seconds to show progress updates
    </script>
</body>
</html>