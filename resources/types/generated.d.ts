declare namespace App.Data {
export type SecurityData = {
user: App.Data.UserData | null;
};
export type SharedData = {
security: App.Data.SecurityData;
};
export type UserData = {
id: number | null;
name: string;
email: string;
email_verified_at: any | null;
};
}
