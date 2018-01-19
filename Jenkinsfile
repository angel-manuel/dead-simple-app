pipeline {
    stages {
        stage('info') {
            steps {
                sh 'echo "Dead Simple App CI"'
            }
        }
        stage('lint') {
            agent { docker 'php:7' }
            steps {
                sh 'echo "Hello from container"'
                sh 'php -l index.php'
            }
        }
    }
}
