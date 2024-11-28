<hr/>
Longstraw Carbon admin

<?php if ($this->app->config('application_url') != ''): ?>
    <?php if (isset($task['id'])): ?>
        - <?= $this->url->absoluteLink(t('view the task on Longstraw Carbon Task Manager'), 'TaskViewController', 'show', array('task_id' => $task['id'])) ?>
    <?php endif ?>
    - <?= $this->url->absoluteLink(t('view the board on Longstraw Carbon Task Manager'), 'BoardViewController', 'show', array('project_id' => $task['project_id'])) ?>
<?php endif ?>
