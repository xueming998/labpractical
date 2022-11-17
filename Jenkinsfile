pipeline {
  agent any
  stages {


    stage('Checkout') {
      steps {
        checkout scm
      }
    }

    stage('OWASP DependencyCheck') {
      steps {
        /* to remove false positive */
        dependencyCheck additionalArguments: '--format HTML --format XML --suppression suppression.xml', odcInstallation: 'Default'
      }
    }
	stage('Docker compose') {
      steps {
        sh "docker compose -f docker-compose.yml up --build"
      }
    }
  }

  post {
    success {
      dependencyCheckPublisher pattern: 'dependency-check-report.xml'
    }
  }
}
