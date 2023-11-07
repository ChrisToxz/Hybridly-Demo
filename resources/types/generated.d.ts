declare namespace App.Data {
export type CreateTodoData = {
title: string;
content: string | null;
priority: App.Enums.TodoPriorityEnum;
due_date: string | null;
};
export type SecurityData = {
user: App.Data.UserData | null;
};
export type SharedData = {
security: App.Data.SecurityData;
toast: App.Data.Toast.ToastData | null;
};
export type TodoData = {
id: string;
title: string;
content: string | null;
priority: string;
created_at: string;
due_date: string | null;
};
export type UserData = {
id: number | null;
name: string;
email_verified_at: string | null;
};
}
declare namespace App.Data.Toast {
export type ToastType = 'info' | 'success' | 'warning' | 'error';
export type ToastData = {
type: App.Data.Toast.ToastType;
body: string;
description: string;
};
}
declare namespace App.Enums {
export type TodoPriorityEnum = 'low' | 'medium' | 'high';
}
