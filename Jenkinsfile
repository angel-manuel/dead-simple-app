pipeline {
    agent { docker 'php:7' }
    stages {
        stage('lint') {
            steps {
                sh 'php -l index.php'
            }
        }
    }
}
