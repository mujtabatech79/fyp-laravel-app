pipeline {
    agent any

    stages {
        stage('Clone Code') {
            steps {
                git branch: 'main', url: 'https://github.com/mujtabatech79/fyp-laravel-app.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t laravel-app .'
            }
        }

        stage('Stop Old Container') {
            steps {
                sh 'docker stop laravel-app || true'
                sh 'docker rm laravel-app || true'
            }
        }

        stage('Deploy Container') {
            steps {
                sh 'docker run -d --name laravel-app -p 80:80 laravel-app'
            }
        }
    }

    post {
        success { echo '✅ Laravel App Deployed Successfully!' }
        failure  { echo '❌ Deployment Failed — Check Logs!'   }
    }
}