pipeline {
    agent { docker 'php:7' }
    stages {
        stage('info') {
            steps {
                sh 'echo "Dead Simple App CI"'
            }
        }
        stage('lint') {
            steps {
                sh 'php -l index.php'
            }
        }
    }
}
