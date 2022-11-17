pipeline {
  agent any
  stages {


    stage('Docker compose') {
      steps {
        sh "docker compose -f docker-compose.yml up --build"
      }
    }

    stage('OWASP DependencyCheck') {
      steps {
        /* to remove false positive */
        dependencyCheck additionalArguments: '--format HTML --format XML --suppression suppression.xml', odcInstallation: 'Default'
      }
    }
	
  }

  post {
    success {
      dependencyCheckPublisher pattern: 'dependency-check-report.xml'
    }
  }
}
