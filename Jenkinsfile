try {
   timeout(time: 20, unit: 'MINUTES') {
      node {
          stage('build') {
            sh "env"
          }
        }
   }
} catch (err) {
   echo "in catch block"
   echo "Caught: ${err}"
   currentBuild.result = 'FAILURE'
   throw err
}
