<template>
    <div class="tasks-page">
      <h1 class="text-2xl font-bold mb-4">Your Tasks</h1>
  
      <div v-if="tasks.length > 0" class="tasks-list">
        <ul>
          <li
            v-for="task in tasks"
            :key="task.id"
            class="border rounded p-4 mb-2"
          >
            <h2 class="font-semibold text-lg">{{ task.title }}</h2>
            <p class="text-gray-600">{{ task.description }}</p>
          </li>
        </ul>
      </div>
  
      <div v-else class="no-tasks">
        <p class="text-gray-500">No tasks available.</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      tasks: {
        type: Array,
        required: true,
      },
    },
  };
  </script>
  
  <style scoped>
  .tasks-page {
    padding: 1rem;
  }
  .tasks-list {
    margin-top: 1rem;
  }
  .no-tasks {
    margin-top: 1rem;
    text-align: center;
  }
  </style>
  