pipeline {
    agent any

    stages {
        stage('Checkout from GitHub') {
            steps {
                git branch: 'main', url: 'https://github.com/ruwanda11/KSI2025.git'
            }
        }

        stage('Run PHP') {
            steps {
                bat 'php index.php'
            }
        }
    }
}
