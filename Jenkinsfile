pipeline {
    agent any // если у нас есть какие то jenkins агенты специально для Ansible мы можем их указать здесь, у меня только один агент, поэтому я поставлю any
    
    stages {
        stage('Version') {
            steps {
                sh 'ansible --version' // выводим версию Ansible
            }
        }

        stage('Deploy') {
            steps {
                withCredentials([sshUserPrivateKey(credentialsId: 'private_ssh_key', keyFileVariable: 'PRIVATE')]) {
                    sh 'ansible-playbook playbook.yaml -i inventory.yaml --private-key $PRIVATE' // Запустим плейбук
                }
            }
        }
    }
}
