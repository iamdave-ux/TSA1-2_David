<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    // Welcome page (/) - showing only today's tasks
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getTodaysTasks();
        return view('welcome_message', $data);
    }

    // Task List page (/tasks) - showing every task ordered by date
    public function listAll()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getAllTasksOrdered();
        return view('task_list', $data);
    }

    // Profile page (/profile) - showing the single demo user record
    public function profile()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->getDemoUser();
        return view('profile', $data);
    }

    // About page (/about) - static page identifying you as the developer
    public function about()
    {
        return view('about');
    }
}