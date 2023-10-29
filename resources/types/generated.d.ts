declare namespace App.Data {
export type CreateTodoData = {
title: string;
description: string | null;
};
export type SecurityData = {
user: App.Data.UserData | null;
};
export type SharedData = {
security: App.Data.SecurityData;
};
export type TodoData = {
id: string;
title: string;
description: string | null;
};
export type UserData = {
id: number | null;
name: string;
email_verified_at: string | null;
};
}
declare namespace App.Enums {
export type TodoPriorityEnum = 'low' | 'medium' | 'high';
}
