pipeline { // задаем тон groovy, даем понять что здесь у нас шаги пайплайна
    agent any // если у нас есть какие то jenkins агенты специально для Ansible мы можем их указать здесь, у меня только один агент, поэтому я поставлю any
    
    stages { // здесь определяем какие шаги в пайплайне
        stage('Deploy') { // наш деплой
            steps { // определяем шаги уже самого стейджа
                sh 'ansible --version' // выводим версию Ansible, команда sh просто выполнит скрипт из консоли
                sh 'ansible-playbook playbook.yaml -i inventory.yaml'
            }
        }
    }
}